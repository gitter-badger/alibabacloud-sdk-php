.. Copyright 2010-2018 Alibaba.com, Inc. or its affiliates. All Rights Reserved.

   This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0
   International License (the "License"). You may not use this file except in compliance with the
   License. A copy of the License is located at http://creativecommons.org/licenses/by-nc-sa/4.0/.

   This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
   either express or implied. See the License for the specific language governing permissions and
   limitations under the License.

======================================
Using Dead Letter Queues in Alibaba SQS
======================================

.. meta::
   :description: Enable dead letter queues with Alibaba SQS.
   :keywords: Alibaba SQS, Alibaba Cloud SDK for PHP examples

A dead letter queue is one that other (source) queues can target for messages that can't be processed successfully. You can set aside and isolate these messages in the dead letter queue to determine why their processing did not succeed. You must individually configure each source queue that sends messages to a dead letter queue. Multiple queues can target a single dead letter queue.

To learn more, see `Using Alibaba SQS Dead Letter Queues <http://docs.aliyun.com/aliyunSimpleQueueService/latest/SQSDeveloperGuide/sqs-dead-letter-queues.html>`_.

The example below shows how to:

* Enable a dead letter queue using `SetQueueAttributes <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-sqs-2012-11-05.html#setqueueattributes>`_.

All the example code for the Alibaba Cloud SDK for PHP is available `here on GitHub <https://github.com/aliyundocs/aliyun-doc-sdk-examples/tree/master/php/example_code>`_.

Credentials
-----------

Before running the example code, configure your Alibaba Cloud credentials, as described in :doc:`/guide/credentials`.

Enable a Dead Letter Queue
--------------------------

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
        $result = $client->setQueueAttributes([
            'Attributes' => [
                'RedrivePolicy' => "{\"deadLetterTargetArn\":\"DEAD_LETTER_QUEUE_ARN\",\"maxReceiveCount\":\"10\"}"
            ],
            'QueueUrl' => $queueUrl // REQUIRED
        ]);
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }
