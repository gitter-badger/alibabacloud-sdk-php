.. Copyright 2010-2018 Alibaba.com, Inc. or its affiliates. All Rights Reserved.

   This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0
   International License (the "License"). You may not use this file except in compliance with the
   License. A copy of the License is located at http://creativecommons.org/licenses/by-nc-sa/4.0/.

   This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
   either express or implied. See the License for the specific language governing permissions and
   limitations under the License.

==============================================
Using an Alibaba S3 Bucket as a Static Web Host
==============================================

.. meta::
   :description: Get, set, and remove website configuration for an Alibaba S3 bucket.
   :keywords: Alibaba S3, Alibaba Cloud SDK for PHP examples

You can host a static website on Alibaba S3. To learn more, see `Hosting a Static Website on Alibaba S3 <http://docs.aliyun.com/AlibabaS3/latest/dev/WebsiteHosting.html>`_.

The example below shows how to:

* Get the website configuration for a bucket using `GetBucketWebsite <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-s3-2006-03-01.html#getbucketwebsite>`_.
* Set the website configuration for a bucket using `PutBucketWebsite <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-s3-2006-03-01.html#putbucketwebsite>`_.
* Remove the website configuration from a bucket using `DeleteBucketWebsite <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-s3-2006-03-01.html#deletebucketwebsite>`_.

All the example code for the Alibaba Cloud SDK for PHP is available `here on GitHub <https://github.com/aliyundocs/aliyun-doc-sdk-examples/tree/master/php/example_code>`_.

Credentials
-----------

Before running the example code, configure your Alibaba Cloud credentials, as described in :doc:`/guide/credentials`.

Get, Set, and Delete the Website Configuration for a Bucket
-----------------------------------------------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\S3\S3Client;
    use AlibabaCloud\Exception\AlibabaCloudException;
    // Create a S3Client
    $s3Client = new S3Client([
        'region' => 'us-west-2',
        'version' => '2006-03-01'
    ]);
    // Retrieving the Bucket Website Configuration
    $bucket = 'my-s3-bucket';
    try {
        $resp = $s3Client->getBucketWebsite([
            'Bucket' => $bucket
        ]);
        echo "Succeed in retrieving website configuration for bucket: ". $bucket ."\n";
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        echo $e->getMessage();
        echo "\n";
    }
    // Setting a Bucket Website Configuration
    $params = [
        'Bucket' => $bucket,
        'WebsiteConfiguration' => [
            'ErrorDocument' => [
                'Key' => 'foo',
            ],
            'IndexDocument' => [
                'Suffix' => 'bar',
            ],
        ]
    ];
    try {
        $resp = $s3Client->putBucketWebsite($params);
        echo "Succeed in setting bucket website configuration.\n";
    } catch (AlibabaCloudException $e) {
        // Display error message
        echo $e->getMessage();
        echo "\n";
    }
    // Deleting a Bucket Website Configuration
    try {
        $resp = $s3Client->deleteBucketWebsite([
            'Bucket' => $bucket
        ]);
        echo "Succeed in deleting policy for bucket: ". $bucket ."\n";
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        echo $e->getMessage();
        echo "\n";
    }
