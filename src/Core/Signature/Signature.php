<?php

namespace AlibabaCloud\Core\Signature;

use AlibabaCloud\Core\Request\Request;

/**
 * Class Signature
 *
 * @package AlibabaCloud\Core\Signature
 */
abstract class Signature {

	/**
	 * @var
	 */
	public $type;
	/**
	 * @var string
	 */
	public $method;
	/**
	 * @var string
	 */
	public $version;

	/**
	 * @var Request
	 */
	private $request;

	/**
	 * @param string $string
	 * @param string $accessSecret
	 *
	 * @return mixed
	 */
	abstract protected function sign($string = '', $accessSecret = '');

	/**
	 * Signature constructor.
	 *
	 * @param Request $request
	 */
	public function __construct(Request $request) {
		$this->request = $request;
	}

	/**
	 * @return mixed
	 * @throws \AlibabaCloud\Core\Exception\ClientException
	 */
	public function create() {
		$paramString  = $this->paramString($this->request->getApiParameters(), $this->request->method);
		$accessSecret = $this->request->getClient()->getCredential()->getAccessSecret() . '&';
		return $this->sign($paramString, $accessSecret);
	}

	/**
	 * @param $param
	 * @param $method
	 *
	 * @return string
	 */
	private function paramString($param, $method) {
		//按参数名排序
		ksort($param);
		$param_string = '';
		$n            = 0;
		foreach ($param as $k => $v) {
			//对参数名称和参数值进行 URL 编码
			$k = rawurlencode($k);
			$v = rawurlencode($v);
			//对编码后的参数名称和值使用英文等号（=）进行连接
			if ($n !== 0) {
				$param_string .= '&';
			}
			$param_string .= $k . '=' . $v;
			$n++;
		}

		return $method . '&' . rawurlencode('/') . '&' . rawurlencode($param_string);
	}

	/**
	 * @return string
	 */
	public function getNonce() {
		return md5(uniqid(mt_rand(), true));
	}

	/**
	 * @return false|string
	 */
	public function getTimestamp() {
		return gmdate("Y-m-d\TH:i:s\Z");
	}

}