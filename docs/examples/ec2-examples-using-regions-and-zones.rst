.. Copyright 2010-2018 Alibaba.com, Inc. or its affiliates. All Rights Reserved.

   This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0
   International License (the "License"). You may not use this file except in compliance with the
   License. A copy of the License is located at http://creativecommons.org/licenses/by-nc-sa/4.0/.

   This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
   either express or implied. See the License for the specific language governing permissions and
   limitations under the License.

====================================
Using Regions and Availability Zones
====================================

.. meta::
   :description: Describe Alibaba Cloud Regions and Availability Zones for Alibaba EC2.
   :keywords: Alibaba EC2, Alibaba Cloud SDK for PHP examples

Alibaba EC2 is hosted in multiple locations worldwide. These locations are composed of regions and Availability Zones. Each region is a separate geographic area. Each region has multiple, isolated locations known as Availability Zones. Alibaba EC2 provides the ability to place instances and data in multiple locations.

The examples below show how to:

* Describe the Availability Zones that are available to you using `DescribeAvailabilityZones <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-ec2-2016-11-15.html#describeavailabilityzones>`_.
* Describe regions that are currently available to you using `DescribeRegions <http://docs.aliyun.com/alibabacloud-sdk-php/v3/api/api-ec2-2016-11-15.html#describeregions>`_.

All the example code for the Alibaba Cloud SDK for PHP is available `here on GitHub <https://github.com/aliyundocs/aliyun-doc-sdk-examples/tree/master/php/example_code>`_.

Credentials
-----------

Before running the example code, configure your Alibaba Cloud credentials, as described in :doc:`/guide/credentials`.

Describe Availability Zones
---------------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\Ec2\Ec2Client;

    $ec2Client = new Ec2Client([
        'region' => 'us-west-2',
        'version' => '2016-11-15',
        'profile' => 'default'
    ]);
    $result = $ec2Client->describeAvailabilityZones();
    var_dump($result);

Describe Regions
----------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\Ec2\Ec2Client;

    $ec2Client = new Ec2Client([
        'region' => 'us-west-2',
        'version' => '2016-11-15',
        'profile' => 'default'
    ]);
    $result = $ec2Client->describeRegions();
    var_dump($result);
