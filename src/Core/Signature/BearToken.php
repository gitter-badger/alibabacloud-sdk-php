<?php

namespace AlibabaCloud\Core\Signature;

/**
 * Class BearToken
 *
 * @package AlibabaCloud\Core\Signature
 */
class BearToken extends Signature {

	/**
	 * @var string
	 */
	public $version = '1.0';
	/**
	 * @var string
	 */
	public $type = 'BEARERTOKEN';

	/**
	 * @param string $string
	 * @param string $accessSecret
	 *
	 * @return mixed
	 */
	public function sign($string = '', $accessSecret = '') {
		return '';
	}
}