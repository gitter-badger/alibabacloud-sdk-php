.. Copyright 2010-2018 Alibaba.com, Inc. or its affiliates. All Rights Reserved.

   This work is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0
   International License (the "License"). You may not use this file except in compliance with the
   License. A copy of the License is located at http://creativecommons.org/licenses/by-nc-sa/4.0/.

   This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
   either express or implied. See the License for the specific language governing permissions and
   limitations under the License.

==================
Managing IAM Users
==================

.. meta::
   :description: Create, list, update, or retrieve info about IAM users.
   :keywords: Alibaba Cloud Identity and Access Management, Alibaba Cloud SDK for PHP examples

An IAM user is an entity that you create in Alibaba Cloud to represent the person or service that uses it to interact with Alibaba Cloud. A user in Alibaba Cloud consists of a name and credentials.

The examples below show how to:

* Create a new IAM user using `CreateUser <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-iam-2010-05-08.html#createuser>`_.
* List IAM users using `ListUsers <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-iam-2010-05-08.html#listusers>`_.
* Update an IAM user using `UpdateUser <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-iam-2010-05-08.html#updateuser>`_.
* Retrieve info about an IAM user using `GetUser <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-iam-2010-05-08.html#getuser>`_.
* Delete an IAM user using `DeleteUser <http://docs.aliyun.com/aliyun-sdk-php/v3/api/api-iam-2010-05-08.html#deleteuser>`_.

All the example code for the Alibaba Cloud SDK for PHP is available `here on GitHub <https://github.com/aliyundocs/aliyun-doc-sdk-examples/tree/master/php/example_code>`_.

Credentials
-----------

Before running the example code, configure your Alibaba Cloud credentials, as described in :doc:`/guide/credentials`.

Create an IAM User
------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\Iam\IamClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $client = new IamClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2010-05-08'
    ]);
    try {
        $result = $client->createUser(array(
            // UserName is required
            'UserName' => 'string',
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

List IAM Users
--------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\Iam\IamClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $client = new IamClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2010-05-08'
    ]);
    try {
        $result = $client->listUsers();
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Update an IAM User
------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\Iam\IamClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $client = new IamClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2010-05-08'
    ]);
    try {
        $result = $client->updateUser(array(
            // UserName is required
            'UserName' => 'string1',
            'NewUserName' => 'string'
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Get Info about an IAM User
--------------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\Iam\IamClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $client = new IamClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2010-05-08'
    ]);
    try {
        $result = $client->getUser(array(
            'UserName' => 'string',
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }

Delete an IAM User
------------------

.. code-block:: php

    require 'vendor/autoload.php';
    use AlibabaCloud\Iam\IamClient;
    use AlibabaCloud\Exception\AlibabaCloudException;

    $client = new IamClient([
        'profile' => 'default',
        'region' => 'us-west-2',
        'version' => '2010-05-08'
    ]);
    try {
        $result = $client->deleteUser(array(
            // UserName is required
            'UserName' => 'string'
        ));
        var_dump($result);
    } catch (AlibabaCloudException $e) {
        // output error message if fails
        error_log($e->getMessage());
    }
