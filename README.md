# Alibaba Cloud SDK for PHP

# 开发和测试中，请不要安装使用！
# Development and testing, Please do not install and use!

## Requirements

- PHP>=5.6

## License

Licensed under the [Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0.html)


[![@AlibabaForPHP on Twitter](http://img.shields.io/badge/twitter-%40AlibabaForPHP-blue.svg?style=flat)](https://twitter.com/AlibabaForPHP)
[![Total Downloads](https://img.shields.io/packagist/dt/alibabacloud/sdk-php.svg?style=flat)](https://packagist.org/packages/alibabacloud/sdk-php)
[![Build Status](https://img.shields.io/travis/alibabacloud/sdk-php.svg?style=flat)](https://travis-ci.org/alibabacloud/sdk-php)
[![Apache 2 License](https://img.shields.io/packagist/l/alibabacloud/sdk-php.svg?style=flat)](http://aliyun.com/apache-2-0/)
[![Gitter](https://badges.gitter.im/alibabacloud/sdk-php.svg)](https://gitter.im/alibabacloud/sdk-php?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)
[![codecov](https://codecov.io/gh/alibabacloud/sdk-php/branch/master/graph/badge.svg)](https://codecov.io/gh/alibabacloud/sdk-php)

The **Alibaba Cloud SDK for PHP** makes it easy for developers to access [Alibaba Cloud] in their PHP code. You can get started in minutes by [installing the SDK through Composer][docs-installation]
or by downloading a single zip or phar file from our [latest release][latest-release].

## Resources

* [User Guide][docs-guide] – For both getting started and in-depth SDK usage information
* [API Docs][docs-api] – For details about operations, parameters, and responses
* [Blog][sdk-blog] – Tips & tricks, articles, and announcements
* [Sample Project][sdk-sample] - A quick, sample project to help get you started
* [Forum][sdk-forum] – Ask questions, get help, and give feedback
* [Issues][sdk-issues] – Report issues, submit pull requests, and get involved
  (see [Apache 2.0 License][sdk-license])
* [@alibabaforphp][sdk-twitter] – Follow us on Twitter

## Getting Help

Please use these community resources for getting help. We use the GitHub issues for tracking bugs and feature requests and have limited bandwidth to address them.

* Ask a question on [StackOverflow](https://stackoverflow.com/) and tag it with [`aliyun-php-sdk`](http://stackoverflow.com/questions/tagged/aliyun-php-sdk)
* Come join the Alibaba Cloud SDK for PHP [gitter](https://gitter.im/alibabacloud/sdk-php)
* Open a support ticket with [Alibaba Cloud Support](https://console.aliyun.com/support/home/)
* If it turns out that you may have found a bug, please [open an issue](https://github.com/alibabacloud/sdk-php/issues/new)

## Opening Issues

If you encounter a bug with `alibabacloud-sdk-php` we would like to hear about it. Search the existing issues and try to make sure your problem doesn’t already exist before opening a new issue. It’s helpful if you include the version of `alibabacloud-sdk-php`, PHP version and OS you’re using. Please include a stack trace and reduced repro case when appropriate, too.

The GitHub issues are intended for bug reports and feature requests. For help and questions with using `alibabacloud-sdk-php` please make use of the resources listed in the Getting Help section. There are limited resources available for handling issues and by keeping the list of open issues lean we can respond in a timely manner.

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

### Create an Alibaba Cloud client

```php
<?php
// Require the Composer autoloader.
require './vendor/autoload.php';

use AlibabaCloud\Core\AlibabaCloud;

AlibabaCloud::accessKeyClient(\getenv('ALICLOUD_ACCESS_KEY_ID'), \getenv('ALICLOUD_SECRET_ACCESS_KEY'))
			->setRegionId('cn-hangzhou')
			->asDefaultClient();

```

### Make a request to Alibaba Cloud

```php
<?php
use AlibabaCloud\Ecs\Ecs;

try {
	$response = Ecs::DescribeRegions()->connectTimeout(1)->timeout(0.9)->debug(true)->request();
	\dump($response->toArray());
} catch (\Exception $exception) {
	\dump($exception->getMessage());
}

```
