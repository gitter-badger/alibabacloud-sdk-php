<?php

namespace AlibabaCloud\Core\Request;

use AlibabaCloud\Core\AlibabaCloud;
use AlibabaCloud\Core\Exception\ClientException;
use AlibabaCloud\Core\Protocol\Http;
use AlibabaCloud\Core\Result\Result;
use AlibabaCloud\Core\Signature\HmacSHA1;
use AlibabaCloud\Core\Signature\Signature;

/**
 * Class Request
 *
 * @method self domain(string $domain)
 * @method self connectTimeout(string $connectTimeout)
 * @method self timeout(string $readTimeout)
 * @method self protocol(string $protocol)
 * @method self debug(bool $bool)
 * @method self method(string $method)
 * @method self proxy(array $array)
 *
 * @method self setType(string $type)
 * @method string getType()
 * @method self setAction(string $action)
 * @method string getAction()
 * @method self setServiceCode(string $serviceCode)
 * @method string getServiceCode()
 * @method self setVersion(string $version)
 * @method string getVersion()
 * @method self setFormat(string $format)
 * @method string getFormat()
 * @method self setProtocol(string $protocol)
 * @method string getProtocol()
 * @method self setRegionId(string $regionId)
 *
 * @package AlibabaCloud\Core\Request
 */
abstract class Request {

	/**
	 * @var string
	 */
	public $domain;
	/**
	 * @var string
	 */
	public $method = 'GET';
	/**
	 * @var
	 */
	protected $content;
	/**
	 * @var array
	 */
	public $headers = [];
	/**
	 * @var string
	 */
	public $clientName = ALIBABA_CLOUD_DEFAULT_NAME;
	/**
	 * @var array
	 */
	public $apiParameters = [];
	/**
	 * @var bool
	 * @clientParameter
	 */
	public $debug = false;
	/**
	 * @var array|string
	 * @clientParameter
	 */
	public $proxy;
	/**
	 * @var array
	 * @clientParameter
	 */
	public $cert;
	/**
	 * @var array
	 * @clientParameter
	 */
	public $cookies;
	/**
	 * @var float|int
	 * @clientParameter
	 */
	public $delay;
	/**
	 * @var float
	 */
	public $connectTimeout = 30;
	/**
	 * @var float
	 */
	public $timeout = 80;
	/**
	 * @var float
	 */
	public $readTimeout = 80;

	/**
	 * Request constructor.
	 *
	 * @param mixed ...$parameters
	 */
	public function __construct(...$parameters) {
		$this->initialParametersByConstruct(...$parameters);
		$this->addHeader('x-sdk-client', 'php/3.0.0');
		$this->setFormat('JSON');
		$this->setProtocol('http');
		$this->setType('openAPI');
	}

	/**
	 * @param mixed ...$parameters
	 *
	 * @return bool
	 */
	private function initialParametersByConstruct(...$parameters) {
		if (!isset($parameters[0]) || !\is_array($parameters[0])) {
			return false;
		}
		foreach ($parameters[0] as $key => $value) {
			if (\property_exists($this, $key)) {
				$this->$key = $value;
			}
		}
	}

	/**
	 * @return Signature
	 */
	public function getSignature() {
		return new HmacSHA1($this);
	}

	/**
	 * @return string
	 * @throws ClientException
	 */
	final public function getQueryString() {
		$parameters              = $this->getApiParameters();
		$parameters['Signature'] = $this->getSignature()->create();
		return '/?' . http_build_query($parameters);
	}

	/**
	 * @param $name
	 *
	 * @return mixed
	 */
	public function __get($name) {
		return isset($this->$name) ? $this->$name : null;
	}

	/**
	 * @param $name
	 * @param $value
	 */
	public function __set($name, $value) {
		$this->$name = $value;
	}

	/**
	 * @param $name
	 *
	 * @return bool
	 */
	public function __isset($name) {
		return isset($this->$name);
	}

	/**
	 * @param $name
	 */
	public function __unset($name) {
		unset($this->$name);
	}

	/**
	 * @param $key
	 * @param $value
	 *
	 * @return Request
	 */
	public function setApiParameters($key, $value) {
		$this->apiParameters[$key] = $value;
		return $this;
	}

	/**
	 * @param $key
	 *
	 * @return mixed|null
	 */
	public function getApiParameters($key = null) {
		if ($key === null) {
			return $this->apiParameters;
		}
		return isset($this->apiParameters[$key]) ? $this->apiParameters[$key] : null;
	}

	/**
	 * @param string $clientName
	 *
	 * @return static
	 */
	public function client($clientName) {
		$this->clientName = $clientName;
		return $this;
	}

	/**
	 * @return AlibabaCloud
	 * @throws ClientException
	 */
	public function getClient() {
		return AlibabaCloud::get($this->clientName);
	}

	/**
	 * @return Result
	 * @throws ClientException
	 * @throws \AlibabaCloud\Core\Exception\ServerException
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function request() {
		return (new Http($this))->request();
	}

	/**
	 * @return string
	 * @throws ClientException
	 */
	public function getRegionId() {
		$regionId = $this->getApiParameters('RegionId') ?: $this->getClient()->getRegionId();
		$regionId = $regionId ?: AlibabaCloud::getGlobalRegionId();
		if ($regionId) {
			return $regionId;
		}
		throw  new ClientException('Not Found RegionId', 400);
	}

	/**
	 * @param $headerKey
	 * @param $headerValue
	 */
	public function addHeader($headerKey, $headerValue) {
		$this->headers[$headerKey] = $headerValue;
	}

	/**
	 * @param $name
	 * @param $arguments
	 *
	 * @return $this
	 * @throws ClientException
	 */
	public function __call($name, $arguments) {
		if (\strpos($name, 'set', 0) !== false) {
			return $this->setApiParameters(\mb_strcut($name, 3), $arguments[0]);
		}
		if (\strpos($name, 'get', 0) !== false) {
			return $this->getApiParameters(\mb_strcut($name, 3));
		}
		$this->__set($this->getPropertyName($name), $arguments[0]);
		return $this;
	}

	/**
	 * @param $name
	 *
	 * @return string
	 * @throws ClientException
	 */
	private function getPropertyName($name) {
		$name[0] = \strtolower($name[0]);
		if (\property_exists(static::class, $name)) {
			return $name;
		}
		throw new ClientException('Not Found Property: ' . $name, 0);
	}

}