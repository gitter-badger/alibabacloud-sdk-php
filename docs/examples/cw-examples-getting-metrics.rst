.. Copyright 2010-2018 Alibaba.com, Inc. or its affiliates. All Rights Reserved.

   This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0
   International License (the "License"). You may not use this file except in compliance with the
   License. A copy of the License is located at http://creativecommons.org/licenses/by-nc-sa/4.0/.

   This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
   either express or implied. See the License for the specific language governing permissions and
   limitations under the License.

======================================
Getting Metrics from Alibaba CloudWatch
======================================

.. meta::
   :description: List Alibaba CloudWatch metrics, retrieve alarms for  metrics, and get metric statistics.
   :keywords: Alibaba Cloudwatch, Alibaba Cloud SDK for PHP examples

Metrics are data about the performance of your systems. You can enable detailed monitoring of some resources, such as your Alibaba EC2 instances, or your own application metrics.

The examples below show how to:

* List metrics using `ListMetrics <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-monitoring-2010-08-01.html#listmetrics>`_.
* Retrieve alarms for a metric using `DescribeAlarmsForMetric <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api//api-monitoring-2010-08-01.html#describealarmsformetric>`_.
* Get statistics for a specified metric using `GetMetricStatistics <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-monitoring-2010-08-01.html#getmetricstatistics>`_.

All the example code for the Alibaba Cloud SDK for PHP is available `here on GitHub <https://github.com/aliyundocs/aliyun-doc-sdk-examples/tree/master/php/example_code>`_.

Credentials
-----------

Before running the example code, configure your Alibaba Cloud credentials, as described in :doc:`/guide/credentials`.

List Metrics
------------

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
        $result = $client->listMetrics();
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Retrieve Alarms for a Metric
----------------------------

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
        $result = $client->describeAlarmsForMetric(array(
            // MetricName is required
            'MetricName' => 'ApproximateNumberOfMessagesVisible',
            // Namespace is required
            'Namespace' => 'Alibaba Cloud/SQS',
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Get Metric Statistics
---------------------

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
        $result = $client->getMetricStatistics(array(
            'Namespace' => 'string',
            'MetricName' => 'CloudWatchTests',
            //StartTime : mixed type: string (date format)|int (unix timestamp)|\DateTime
            'StartTime' => strtotime('-1 days'),
            //EndTime : mixed type: string (date format)|int (unix timestamp)|\DateTime
            'EndTime' => strtotime('now'),
            //The granularity, in seconds, of the returned datapoints. Period must be at least 60 seconds and must be a multiple of 60. The default value is 60
            'Period' => 3000,
            'Statistics' => array('Maximum', 'Minimum'),
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }
