.. Copyright 2010-2018 Alibaba.com, Inc. or its affiliates. All Rights Reserved.

   This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0
   International License (the "License"). You may not use this file except in compliance with the
   License. A copy of the License is located at http://creativecommons.org/licenses/by-nc-sa/4.0/.

   This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
   either express or implied. See the License for the specific language governing permissions and
   limitations under the License.

==========================================
Sending Events to Alibaba CloudWatch Events
==========================================

.. meta::
   :description: Create rules and add targets to them, and send custom events to CloudWatch Events.
   :keywords: Alibaba Cloudwatch, Alibaba Cloud SDK for PHP examples

CloudWatch Events delivers a near real-time stream of system events that describe changes in Alibaba Web Services (Alibaba Cloud) resources to any of various targets. Using simple rules, you can match events and route them to one or more target functions or streams.

The examples below show how to:

* Create a rule using `PutRule <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-events-2015-10-07.html#putrule>`_.
* Add targets to a rule using `PutTargets <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-events-2015-10-07.html#puttargets>`_.
* Send custom events to CloudWatch Events using `PutEvents <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-events-2015-10-07.html#putevents>`_.

All the example code for the Alibaba Cloud SDK for PHP is available `here on GitHub <https://github.com/aliyundocs/aliyun-doc-sdk-examples/tree/master/php/example_code>`_.

Credentials
-----------

Before running the example code, configure your Alibaba Cloud credentials, as described in :doc:`/guide/credentials`.

Create a Rule
-------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\CloudWatchEvents\CloudWatchEventsClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $client = new CloudWatchEventsClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2015-10-07'
    ]);
    try {
        $result = $client->putRule(array(
            'Name' => 'DEMO_EVENT', // REQUIRED
            'RoleArn' => 'IAM_ROLE_ARN',
            'ScheduleExpression' => 'rate(5 minutes)',
            'State' => 'ENABLED',
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Add Targets to a Rule
---------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\CloudWatchEvents\CloudWatchEventsClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $client = new CloudWatchEventsClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2015-10-07'
    ]);
    try {
        $result = $client->putTargets([
            'Rule' => 'DEMO_EVENT', // REQUIRED
            'Targets' => [ // REQUIRED
                [
                    'Arn' => 'LAMBDA_FUNCTION_ARN', // REQUIRED
                    'Id' => 'myCloudWatchEventsTarget' // REQUIRED
                ],
            ],
        ]);
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Send Custom Events
------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\CloudWatchEvents\CloudWatchEventsClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $client = new CloudWatchEventsClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2015-10-07'
    ]);
    try {
        $result = $client->putEvents([
            'Entries' => [ // REQUIRED
                [
                    'Detail' => '<string>',
                    'DetailType' => '<string>',
                    'Resources' => ['<string>'],
                    'Source' => '<string>',
                    'Time' => time()
                ],
            ],
        ]);
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }
