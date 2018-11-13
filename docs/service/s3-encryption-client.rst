================================
Alibaba S3 Client Side Encryption
================================

The Alibaba Cloud SDK for PHP provides an ``S3EncryptionClient``. With client-side
encryption, data is encrypted and decrypted directly in your environment. This
means that this data is encrypted before it's transferred to Alibaba S3, and you
don’t rely on an external service to handle encryption for you.

The Alibaba Cloud SDK for PHP implements `envelope encryption <http://docs.aliyun.com/kms/latest/developerguide/workflow.html>`_
and utilizes `OpenSSL <https://www.openssl.org/>`_ for its encrypting and
decrypting. The implementation is interoperable with `other SDKs that match its feature support <http://docs.aliyun.com/general/latest/gr/aliyun_sdk_cryptography.html>`_.
It's also compatible with `the SDK’s promise based asynchronous workflow <https://docs.aliyun.com/aliyun-sdk-php/v3/guide/guide/promises.html>`_.

Setup
-----

To get started with client-side encryption, you need the following:

* An `Alibaba Cloud KMS encryption key <http://docs.aliyun.com/kms/latest/developerguide/create-keys.html>`_
* An `Alibaba S3 bucket <http://docs.aliyun.com/AlibabaS3/latest/gsg/CreatingABucket.html>`_

Encryption
----------

Uploading an encrypted object through the PutObject operation takes a similar
interface and requires two new parameters.

.. code-block:: php

    // Let's construct our S3EncryptionClient using an S3Client
    $encryptionClient = new S3EncryptionClient(
        new S3Client([
            'region' => 'us-east-1',
            'version' => 'latest',
        ])
    );

    $kmsKeyArn = 'arn-to-the-kms-key';
    // This materials provider handles generating a cipher key and
    // initialization vector, as well as encrypting your cipher key via Alibaba Cloud KMS
    $materialsProvider = new KmsMaterialsProvider(
        new KmsClient([
            'region' => 'us-east-1',
            'version' => 'latest',
        ]),
        $kmsKeyArn
    );

    $bucket = 'the-bucket-name';
    $key = 'the-upload-key';
    $cipherOptions = [
        'Cipher' => 'gcm'
        'KeySize' => 256,
        // Additional configuration options
    ];

    $result = $encryptionClient->putObject([
        '@MaterialsProvider' => $materialsProvider,
        '@CipherOptions' => $cipherOptions,
        'Bucket' => $bucket,
        'Key' => $key,
        'Body' => fopen('file-to-encrypt.txt'),
    ]);

.. note::

    In addition to the Alibaba S3 and Alibaba Cloud KMS based service errors, you may
    receive thrown ``InvalidArgumentException`` objects if your
    ``'@CipherOptions'`` are not correctly configured.

Decryption
----------

Downloading and decrypting an object requires only one additional parameter on
top of GetObject, and the client will detect the basic cipher options for you.
Additional configuration options are passed through for decryption.

.. code-block:: php

    $result = $encryptionClient->getObject([
        '@MaterialsProvider' => $materialsProvider,
        '@CipherOptions' => [
            // Additional configuration options
        ],
        'Bucket' => $bucket,
        'Key' => $key,
    ]);

.. note::

    In addition to the Alibaba S3 and Alibaba Cloud KMS based service errors, you may
    receive thrown ``InvalidArgumentException`` objects if your
    ``'@CipherOptions'`` are not correctly configured.

Cipher Configuration
--------------------

``'Cipher'`` (string)
    This is the cipher method that the encryption client will use while
    encrypting. Only 'gcm' and 'cbc' are supported at this time.

.. important::

    PHP `updated in version 7.1 <http://php.net/manual/en/migration71.new-features.php>`_
    to include the extra parameters necessary to `encrypt <http://php.net/manual/en/function.openssl-encrypt.php>`_
    and `decrypt <http://php.net/manual/en/function.openssl-decrypt.php>`_
    using OpenSSL for GCM encryption. As such, using GCM with your
    ``AlibabaCloud\S3\Crypto\S3EncryptionClient`` is only available on PHP 7.1 or higher.

``'KeySize'`` (int)
    This specifies the length of the content encryption key to be generated for
    encrypting. Defaults to 256 bits. Valid configuration options are 256,
    192, and 128.

``'Aad'`` (string)
    Optional 'Additional authentication data' to be included with your
    encrypted payload. This information is validated on decryption. Aad is only
    available when using the 'gcm' cipher.

Metadata Strategies
-------------------

You also have the option of providing an instance of a class that implements
the ``AlibabaCloud\Crypto\MetadataStrategyInterface``. This simple interface handles
saving and loading the ``AlibabaCloud\Crypto\MetadataEnvelope`` that contains your
envelope encryption materials. The SDK provides two classes that implement
this: ``AlibabaCloud\S3\Crypto\HeadersMetadataStrategy`` and
``AlibabaCloud\S3\Crypto\InstructionFileMetadataStrategy``. The ``HeadersMetadataStrategy``
is used by default.

.. code-block:: php

    $strategy = new InstructionFileMetadataStrategy(
        $s3Client,
        '.instr'
    );

    $result = $encryptionClient->putObject([
        '@MaterialsProvider' => $materialsProvider,
        '@MetadataStrategy' => $strategy,
        '@CipherOptions' => $cipherOptions,
        'Bucket' => $bucket,
        'Key' => $key,
        'Body' => fopen('file-to-encrypt.txt'),
    ]);

Class name constants for the ``HeadersMetadataStrategy`` and
``InstructionFileMetadataStrategy`` can also be supplied by invoking
`::class`.

.. code-block:: php

    $result = $encryptionClient->putObject([
        '@MaterialsProvider' => $materialsProvider,
        '@MetadataStrategy' => HeadersMetadataStrategy::class,
        '@CipherOptions' => $cipherOptions,
        'Bucket' => $bucket,
        'Key' => $key,
        'Body' => fopen('file-to-encrypt.txt'),
    ]);

.. note::

    If there is a failure after an instruction file has been uploaded, it will
    not be automatically deleted.

Multipart Uploads
-----------------

Performing a multipart upload with client-side encryption is also possible. The
``AlibabaCloud\S3\Crypto\S3EncryptionMultipartUploader`` prepares the source stream for
for encryption before uploading. Creating one takes on a similar experience to
using the ``AlibabaCloud\S3\MultipartUploader`` and the ``AlibabaCloud\S3\Crypto\S3EncryptionClient``.
The ``S3EncryptionMultipartUploader`` can handle the same ``'@MetadataStrategy'``
option as the ``S3EncryptionClient``, as well as all available ``'@CipherOptions'``
configurations.

.. code-block:: php

    $kmsKeyArn = 'arn-to-the-kms-key';
    // This materials provider handles generating a cipher key and
    // initialization vector, as well as encrypting your cipher key via Alibaba Cloud KMS
    $materialsProvider = new KmsMaterialsProvider(
        new KmsClient([
            'region' => 'us-east-1',
            'version' => 'latest',
        ]),
        $kmsKeyArn
    );

    $bucket = 'the-bucket-name';
    $key = 'the-upload-key';
    $cipherOptions = [
        'Cipher' => 'gcm'
        'KeySize' => 256,
        // Additional configuration options
    ];

    $multipartUploader = new S3EncryptionMultipartUploader(
        new S3Client([
            'region' => 'us-east-1',
            'version' => 'latest',
        ]),
        fopen('large-file-to-encrypt.txt'),
        [
            '@MaterialsProvider' => $materialsProvider,
            '@CipherOptions' => $cipherOptions,
            'bucket' => 'bucket',
            'key' => 'key',
        ]
    );
    $multipartUploader->upload();

.. note::

    In addition to the Alibaba S3 and Alibaba Cloud KMS based service errors, you may
    receive thrown ``InvalidArgumentException`` objects if your
    ``'@CipherOptions'`` are not correctly configured.