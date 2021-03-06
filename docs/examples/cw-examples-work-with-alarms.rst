.. Copyright 2010-2018 Alibaba.com, Inc. or its affiliates. All Rights Reserved.

   This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0
   International License (the "License"). You may not use this file except in compliance with the
   License. A copy of the License is located at http://creativecommons.org/licenses/by-nc-sa/4.0/.

   This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
   either express or implied. See the License for the specific language governing permissions and
   limitations under the License.

=====================================
Working with Alibaba CloudWatch Alarms
=====================================

.. meta::
   :description: Create CloudWatch alarms that automatically stop, terminate, reboot, or recover EC2 instances.
   :keywords: Alibaba CloudWatch, Alibaba Cloud SDK for PHP examples

An Alibaba CloudWatch alarm watches a single metric over a time period you specify, and performs one or more actions based on the value of the metric relative to a given threshold over a number of time periods.

The examples below show how to:

* Describe an alarm using `DescribeAlarms <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-monitoring-2010-08-01.html#describealarms>`_.
* Create an alarm using `PutMetricAlarm <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-monitoring-2010-08-01.html#putmetricalarm>`_.
* Delete an alarm using `DeleteAlarms <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-monitoring-2010-08-01.html#deletealarms>`_.

All the example code for the Alibaba Cloud SDK for PHP is available `here on GitHub <https://github.com/aliyundocs/aliyun-doc-sdk-examples/tree/master/php/example_code>`_.

Credentials
-----------

Before running the example code, configure your Alibaba Cloud credentials, as described in :doc:`/guide/credentials`.

Describe Alarms
---------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\CloudWatch\CloudWatchClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $client = new CloudWatchClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2010-08-01'
    ]);
    try {
        $result = $client->describeAlarms([
        ]);
        foreach ($result['MetricAlarms'] as $alarm) {
            echo $alarm['AlarmName'] . "\n";
        }
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Create an Alarm
---------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\CloudWatch\CloudWatchClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $client = new CloudWatchClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2010-08-01'
    ]);
    try {
        $result = $client->putMetricAlarm(array(
            // AlarmName is required
            'AlarmName' => 'string',
            // MetricName is required
            'MetricName' => 'string',
            // Namespace is required
            'Namespace' => 'string',
            // Statistic is required
            //string: SampleCount | Average | Sum | Minimum | Maximum
            'Statistic' => 'string',
            // Period is required
            'Period' => integer,
            'Unit' => 'Count/Second',
            // EvaluationPeriods is required
            'EvaluationPeriods' => integer,
            // Threshold is required
            'Threshold' => interger,
            // ComparisonOperator is required
            // string: GreaterThanOrEqualToThreshold | GreaterThanThreshold | LessThanThreshold | LessThanOrEqualToThreshold
            'ComparisonOperator' => 'string',
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Delete Alarms
-------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\CloudWatch\CloudWatchClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $alarmName = "<ALARM_NAME>";
    $client = new CloudWatchClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2010-08-01'
    ]);
    try {
        $result = $client->deleteAlarms([
            'AlarmNames' => [$alarmName] // REQUIRED
        ]);
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }
