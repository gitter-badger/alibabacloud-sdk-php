=========================
Alibaba S3 Presigned POSTs
=========================

Much like pre-signed URLs, pre-signed POSTs allow you to give write access to a
user without giving them Alibaba Cloud credentials. Presigned POST forms can be created
with the help of an instance of `AlibabaCloud\S3\PostObjectV4 <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/class-AlibabaCloud.S3.PostObjectV4.html>`_.

To create an instance of ``PostObjectV4``, you must provide an instance of
``AlibabaCloud\S3\S3Client``, a bucket, an associative array of form input fields,
an array of policy conditions referred in `POST policy document
<http://docs.aliyun.com/AlibabaS3/latest/dev/HTTPPOSTForms.html#HTTPPOSTConstructPolicy>`_
and expiration time string for the policy(optional, 1 hour by default):

.. code-block:: php

    $client = new \AlibabaCloud\S3\S3Client([
        'version' => 'latest',
        'region' => 'us-west-2',
    ]);
    $bucket = 'mybucket';

    // Set some defaults for form input fields
    $formInputs = ['acl' => 'public-read'];

    // Construct an array of conditions for policy
    $options = [
        ['acl' => 'public-read'],
        ['bucket' => $bucket],
        ['starts-with', '$key', 'user/eric/'],
    ];

    // Optional: configure expiration time string
    $expires = '+2 hours';

    $postObject = new \AlibabaCloud\S3\PostObjectV4(
        $client,
        $bucket,
        $formInputs,
        $options,
        $expires
    );

    // Get attributes to set on an HTML form, e.g., action, method, enctype
    $formAttributes = $postObject->getFormAttributes();

    // Get form input fields. This will include anything set as a form input in
    // the constructor, the provided JSON policy, your Alibaba Cloud Access Key ID, and an
    // auth signature.
    $formInputs = $postObject->getFormInputs();
