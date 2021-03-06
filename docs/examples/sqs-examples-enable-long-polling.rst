.. Copyright 2010-2018 Alibaba.com, Inc. or its affiliates. All Rights Reserved.

   This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0
   International License (the "License"). You may not use this file except in compliance with the
   License. A copy of the License is located at http://creativecommons.org/licenses/by-nc-sa/4.0/.

   This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
   either express or implied. See the License for the specific language governing permissions and
   limitations under the License.

===================================
Enabling Long Polling in Alibaba SQS
===================================

.. meta::
   :description:
   :keywords: Alibaba SQS, Alibaba Cloud SDK for PHP examples

Long polling reduces the number of empty responses by allowing Alibaba SQS to wait a specified time for a message to become available in the queue before sending a response. Also, long polling eliminates false empty responses by querying all of the servers instead of a sampling of servers. To enable long polling, you must specify a non-zero wait time for received messages. To learn more, see `Alibaba SQS Long Polling <http://docs.aliyun.com/aliyunSimpleQueueService/latest/SQSDeveloperGuide/sqs-long-polling.html>`_.

The examples below show how to:

* Set attributes on an SQS queue to enable long polling, using `SetQueueAttributes <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-sqs-2012-11-05.html#setqueueattributes>`_.
* Retrieve one or more messages with long polling using `ReceiveMessage <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-sqs-2012-11-05.html#receivemessage>`_.
* Create a long polling queue using `CreateQueue <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-sqs-2012-11-05.html#createqueue>`_.

All the example code for the Alibaba Cloud SDK for PHP is available `here on GitHub <https://github.com/aliyundocs/aliyun-doc-sdk-examples/tree/master/php/example_code>`_.

Credentials
-----------

Before running the example code, configure your Alibaba Cloud credentials, as described in :doc:`/guide/credentials`.

Set Attributes on a Queue to Enable Long Polling
------------------------------------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\Sqs\SqsClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $queueUrl = "QUEUE_URL";
    $client = new SqsClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2012-11-05'
    ]);
    try {
        $result = $client->setQueueAttributes(array(
            'Attributes' => [
                'ReceiveMessageWaitTimeSeconds' => 20
            ],
            'QueueUrl' => $queueUrl, // REQUIRED
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Retrieve Messages with Long Polling
-----------------------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\Sqs\SqsClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $queueUrl = "QUEUE_URL";
    $client = new SqsClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2012-11-05'
    ]);
    try {
        $result = $client->receiveMessage(array(
            'AttributeNames' => ['SentTimestamp'],
            'MaxNumberOfMessages' => 1,
            'MessageAttributeNames' => ['All'],
            'QueueUrl' => $queueUrl, // REQUIRED
            'WaitTimeSeconds' => 20,
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Create a Queue with Long Polling
--------------------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\Sqs\SqsClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $queueName = "QUEUE_NAME";
    $client = new SqsClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2012-11-05'
    ]);
    try {
        $result = $client->createQueue(array(
            'QueueName' => $queueName,
            'Attributes' => array(
                'ReceiveMessageWaitTimeSeconds' => 20
            ),
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }
