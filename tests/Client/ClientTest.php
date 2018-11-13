<?php

namespace AlibabaCloud\Test\Client;

use AlibabaCloud\Core\AlibabaCloud;
use AlibabaCloud\Core\Profile\DefaultProfile;
use PHPUnit\Framework\TestCase;

/**
 * Class ClientTest
 *
 * @package AlibabaCloud\Test\Client
 */
class ClientTest extends TestCase {

	/**
	 * @var string accessKeyId
	 */
	public static $accessKeyId;

	/**
	 * @var string accessSecret
	 */
	public static $accessSecret;

	public function testClient() {
		self::$accessKeyId  = \getenv('ALICLOUD_ACCESS_KEY_ID');
		self::$accessSecret = \getenv('ALICLOUD_SECRET_ACCESS_KEY');
		AlibabaCloud::add(new DefaultProfile('cn-hangzhou', self::$accessKeyId, self::$accessSecret));
		AlibabaCloud::add(new DefaultProfile('cn-hangzhou', self::$accessKeyId, self::$accessSecret), 'puling');
	}

}
