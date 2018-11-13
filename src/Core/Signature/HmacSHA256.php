<?php

namespace AlibabaCloud\Core\Signature;

/**
 * Class HmacSHA256
 *
 * @package AlibabaCloud\Core\Signature
 */
class HmacSHA256 extends Signature {

	/**
	 * @var string
	 */
	public $method = 'HMAC-SHA256';
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
		return base64_encode(hash_hmac('sha256', $string, $accessSecret, true));
	}
}