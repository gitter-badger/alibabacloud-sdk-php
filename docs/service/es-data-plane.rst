======================================================
Signing an Alibaba Elasticsearch Service Search Request
======================================================

Alibaba Elasticsearch Service (Alibaba ES) is a managed service that makes it easy
to deploy, operate, and scale Elasticsearch, a popular open-source search and
analytics engine. Alibaba ES offers direct access to the Elasticsearch API,
meaning that developers can use the tools with which they’re familiar, as well
as robust security options, such as using IAM users and roles for access
control. Many Elasticsearch clients support request signing, but if you're using
a client that doesn't, you can sign arbitrary PSR-7 requests with the SDK's
built-in credential providers and signers.

Signing an Alibaba ES Request
----------------------------

Alibaba ES uses `Signature Version 4 <http://docs.aliyun.com/general/latest/gr/signature-version-4.html>`_,
which means that you will need to sign requests against the service's signing
name (``es``, in this case) and the region of your Alibaba ES domain. A full list
of regions supported by Alibaba ES can be found `on Alibaba Cloud's Regions and Endpoints
page <http://docs.aliyun.com/general/latest/gr/rande.html#elasticsearch-service-regions>`_,
but in this sample, I'll be signing requests against an Alibaba ES domain in the
``us-west-2`` region.

You'll need to provide credentials, which can be done either with the SDK's
default provider chain or any any form of credentials described in
:doc:`../guide/credentials`, as well as a `PSR-7 request
<http://docs.aliyun.com/aliyun-sdk-php/v3/api/class-Psr.Http.Message.RequestInterface.html>`_
(assumed in the code below to be named ``$psr7Request``):

.. code-block:: php

    // Pull credentials from the default provider chain
    $provider = AlibabaCloud\Credentials\CredentialProvider::defaultProvider();
    $credentials = call_user_func($provider)->wait();

    // Create a signer with the service's signing name and region
    $signer = new AlibabaCloud\Signature\SignatureV4('es', 'us-west-2');

    // Sign your request
    $signedRequest = $signer->signRequest($psr7Request, $credentials);

