<?php

namespace AlibabaCloud\Core\Signature;

/**
 * Class HmacSHA1
 *
 * @package AlibabaCloud\Core\Signature
 */
class HmacSHA1 extends Signature {

	/**
	 * @var string
	 */
	public $method = 'HMAC-SHA1';
	/**
	 * @var string
	 */
	public $version = '1.0';

	/**
	 * @param string $string
	 * @param string $accessSecret
	 *
	 * @return mixed
	 */
	public function sign($string = '', $accessSecret = '') {
		return base64_encode(hash_hmac('sha1', $string, $accessSecret, true));
	}
}