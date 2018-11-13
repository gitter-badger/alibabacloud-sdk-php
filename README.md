# Alibaba Cloud SDK for PHP - Version 1

## 开发和测试中，请不要安装使用！
## Development and testing, Please do not install and use!

## Requirements

- PHP>=5.6

## Example

	include_once '../aliyun-php-sdk-core/Config.php';
	use Ecs\Request\V20140526 as Ecs;
	
	$profile = Profile::getProfile("cn-hangzhou", "<your accessKey>", "<your accessSecret>");
	$client = new AlibabaCloud($profile);
	
	$request = new Ecs\DescribeRegionsRequest(); 
	$request->setMethod("GET");
	$response = $client->getResponse($request);
	print_r($response);



## License

licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)




[![@aliyunforphp on Twitter](http://img.shields.io/badge/twitter-%40aliyunforphp-blue.svg?style=flat)](https://twitter.com/aliyunforphp)
[![Total Downloads](https://img.shields.io/packagist/dt/alibabacloud/sdk-php.svg?style=flat)](https://packagist.org/packages/alibabacloud/sdk-php)
[![Build Status](https://img.shields.io/travis/alibabacloud/sdk-php.svg?style=flat)](https://travis-ci.org/alibabacloud/sdk-php)
[![Apache 2 License](https://img.shields.io/packagist/l/alibabacloud/sdk-php.svg?style=flat)](http://aliyun.com/apache-2-0/)
[![Gitter](https://badges.gitter.im/alibabacloud/sdk-php.svg)](https://gitter.im/alibabacloud/sdk-php?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)
[![codecov](https://codecov.io/gh/alibabacloud/sdk-php/branch/master/graph/badge.svg)](https://codecov.io/gh/alibabacloud/sdk-php)

The **Alibaba Cloud SDK for PHP** makes it easy for developers to access [Alibaba Web
Services][aliyun] in their PHP code, and build robust applications and software
using services like Alibaba S3, Alibaba DynamoDB, Alibaba Glacier, etc. You can
get started in minutes by [installing the SDK through Composer][docs-installation]
or by downloading a single zip or phar file from our [latest release][latest-release].

## Resources

* [User Guide][docs-guide] – For both getting started and in-depth SDK usage information
* [API Docs][docs-api] – For details about operations, parameters, and responses
* [Blog][sdk-blog] – Tips & tricks, articles, and announcements
* [Sample Project][sdk-sample] - A quick, sample project to help get you started
* [Forum][sdk-forum] – Ask questions, get help, and give feedback
* [Issues][sdk-issues] – Report issues, submit pull requests, and get involved
  (see [Apache 2.0 License][sdk-license])
* [@aliyunforphp][sdk-twitter] – Follow us on Twitter

## Getting Help

Please use these community resources for getting help. We use the GitHub issues for tracking bugs and feature requests and have limited bandwidth to address them.

* Ask a question on [StackOverflow](https://stackoverflow.com/) and tag it with [`aliyun-php-sdk`](http://stackoverflow.com/questions/tagged/aliyun-php-sdk)
* Come join the Alibaba Cloud SDK for PHP [gitter](https://gitter.im/alibabacloud/sdk-php)
* Open a support ticket with [Alibaba Cloud Support](https://console.aliyun.com/support/home/)
* If it turns out that you may have found a bug, please [open an issue](https://github.com/alibabacloud/sdk-php/issues/new)

## Opening Issues

If you encounter a bug with `aliyun-sdk-php` we would like to hear about it. Search the existing issues and try to make sure your problem doesn’t already exist before opening a new issue. It’s helpful if you include the version of `aliyun-sdk-php`, PHP version and OS you’re using. Please include a stack trace and reduced repro case when appropriate, too.

The GitHub issues are intended for bug reports and feature requests. For help and questions with using `aliyun-sdk-php` please make use of the resources listed in the Getting Help section. There are limited resources available for handling issues and by keeping the list of open issues lean we can respond in a timely manner.

## Features

* Provides easy-to-use HTTP clients for all supported Alibaba Cloud
  [services][docs-services], [regions][docs-rande], and authentication
  protocols.
* Is built on [Guzzle][guzzle-docs], and utilizes many of its features,
  including persistent connections, asynchronous requests, middlewares, etc.
* Provides convenience features including easy result pagination via
  [Paginators][docs-paginators], [Waiters][docs-waiters], and simple
  [Result objects][docs-results].
* Provides a [multipart uploader tool][docs-s3-multipart] for Alibaba S3 and
  Alibaba Glacier that can be paused and resumed.
* Provides an [Alibaba S3 Stream Wrapper][docs-streamwrapper], so that you can
  use PHP's native file handling functions to interact with your S3 buckets and
  objects like a local filesystem.
* Provides the [Alibaba DynamoDB Session Handler][docs-ddbsh] for easily scaling
  sessions on a fast, NoSQL database.
* Automatically uses [IAM Instance Profile Credentials][aliyun-iam-credentials] on
  configured Alibaba EC2 instances.

## Getting Started

1. **Sign up for Alibaba Cloud** – Before you begin, you need to
   sign up for an Alibaba Cloud account and retrieve your [Alibaba Cloud credentials][docs-signup].
1. **Minimum requirements** – To run the SDK, your system will need to meet the
   [minimum requirements][docs-requirements], including having **PHP >= 5.5**.
   We highly recommend having it compiled with the cURL extension and cURL
   7.16.2+ compiled with a TLS backend (e.g., NSS or OpenSSL).
1. **Install the SDK** – Using [Composer] is the recommended way to install the
   Alibaba Cloud SDK for PHP. The SDK is available via [Packagist] under the
   [`alibabacloud/sdk-php`][install-packagist] package. If Composer is installed globally on your system, you can run the following in the base directory of your project to add the SDK as a dependency:
   ```
   composer require alibabacloud/sdk-php
   ```
   Please see the
   [Installation section of the User Guide][docs-installation] for more
   detailed information about installing the SDK through Composer and other
   means.
1. **Using the SDK** – The best way to become familiar with how to use the SDK
   is to read the [User Guide][docs-guide]. The
   [Getting Started Guide][docs-quickstart] will help you become familiar with
   the basic concepts.

## Quick Examples

### Create an Alibaba S3 client

```php
<?php
// Require the Composer autoloader.
require 'vendor/autoload.php';

use AlibabaCloud\S3\S3Client;

// Instantiate an Alibaba S3 client.
$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'us-west-2'
]);
```

### Upload a file to Alibaba S3

```php
<?php
// Upload a publicly accessible file. The file size and type are determined by the SDK.
try {
    $s3->putObject([
        'Bucket' => 'my-bucket',
        'Key'    => 'my-object',
        'Body'   => fopen('/path/to/file', 'r'),
        'ACL'    => 'public-read',
    ]);
} catch (AlibabaCloud\S3\Exception\S3Exception $e) {
    echo "There was an error uploading the file.\n";
}
```

### Related Alibaba Cloud Projects

* [Alibaba Cloud Service Provider for Laravel][mod-laravel]
* [Alibaba Cloud SDK ZF2 Module][mod-zf2]
* [Alibaba Cloud Service Provider for Silex][mod-silex]
* [Alibaba Cloud SDK Bundle for Symfony][mod-symfony]
* [Alibaba SNS Message Validator for PHP][sns-validator] - SNS validator without requiring SDK
* [Guzzle Version 6][guzzle-docs] – PHP HTTP client and framework
* For Version 2 of the SDK:
  * [User Guide][docs-guide-v2]
  * [API Docs][docs-api-v2]
* Other [Alibaba Cloud SDKs & Tools][aliyun-tools] (e.g., js, cli, ruby, python, java, etc.)

[sdk-website]: http://aliyun.com/sdkforphp
[sdk-forum]: https://forums.aliyun.com/forum.jspa?forumID=80
[sdk-issues]: https://github.com/alibabacloud/sdk-php/issues
[sdk-license]: http://aliyun.com/apache2.0/
[sdk-blog]: https://aliyun.com/blogs/developer/category/php/
[sdk-twitter]: https://twitter.com/aliyunforphp
[sdk-sample]: http://aliyun.com/developers/getting-started/php

[install-packagist]: https://packagist.org/packages/alibabacloud/sdk-php
[latest-release]: https://github.com/alibabacloud/sdk-php/releases

[docs-api]: http://docs.aliyun.com/aliyun-sdk-php/v3/api/index.html
[docs-guide]: http://docs.aliyun.com/sdk-for-php/v3/developer-guide/welcome.html
[docs-api-v2]: http://docs.aliyun.com/aliyun-sdk-php/v2/api/index.html
[docs-guide-v2]: http://docs.aliyun.com/aliyun-sdk-php/v2/guide/index.html
[docs-contribution]: https://github.com/alibabacloud/sdk-php/blob/master/CONTRIBUTING.md
[docs-migration]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/getting-started_migration.html
[docs-signup]: http://aliyun.com/developers/access-keys/
[docs-requirements]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/getting-started_requirements.html
[docs-installation]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/getting-started_installation.html
[docs-quickstart]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/welcome.html#getting-started
[docs-paginators]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/guide_paginators.html
[docs-waiters]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/guide_waiters.html
[docs-results]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/getting-started_basic-usage.html#result-objects
[docs-exceptions]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/getting-started_basic-usage.html#handling-errors
[docs-wire-logging]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/faq.html#how-can-i-see-what-data-is-sent-over-the-wire
[docs-ddbsh]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/service_dynamodb-session-handler.html
[docs-services]: https://aliyun.com/products/
[docs-rande]: http://docs.aliyun.com/general/latest/gr/rande.html
[docs-streamwrapper]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/s3-stream-wrapper.html
[docs-s3-transfer]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/s3-transfer.html
[docs-s3-multipart]: https://docs.aliyun.com/sdk-for-php/v3/developer-guide/s3-multipart-upload.html

[aliyun]: http://aliyun.com
[aliyun-iam-credentials]: http://docs.aliyun.com/aliyunEC2/latest/UserGuide/UsingIAM.html#UsingIAMrolesWithAlibabaEC2Instances
[aliyun-tools]: http://aliyun.com/tools
[guzzle-docs]: http://guzzlephp.org
[composer]: http://getcomposer.org
[packagist]: http://packagist.org
[psr-7]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-7-http-message.md
[psr-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md
[psr-1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[psr-2]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md

[mod-laravel]: https://github.com/alibabacloud/sdk-php-laravel
[mod-zf2]: https://github.com/alibabacloud/sdk-php-zf2
[mod-silex]: https://github.com/alibabacloud/sdk-php-silex
[mod-symfony]: https://github.com/alibabacloud/sdk-php-symfony
[sns-validator]: https://github.com/aliyun/aliyun-php-sns-message-validator

