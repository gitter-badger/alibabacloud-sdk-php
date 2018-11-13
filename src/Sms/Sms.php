<?php

namespace AlibabaCloud\Sms;

/**
 * Class Sms
 *
 * @method static SendSmsRequest SendSms(array $args = array())
 * @package AlibabaCloud\Sms
 */
class Sms {

	/**
	 * @param string $function
	 * @param array  $parameters
	 *
	 * @return SendSmsRequest
	 */
	public static function __callStatic($function, $parameters) {
		$class = __NAMESPACE__ . '\\' . $function . 'Request';
		return new $class(...$parameters);
	}

}