<?php

namespace AlibabaCloud\Core\Regions;

use AlibabaCloud\Core\Config\AlibabaCloudConfig;

/**
 * Class LocationService
 *
 * @package AlibabaCloud\Core\Regions
 */
class LocationService {

	/**
	 * @var array
	 */
	public static $cache = [];
	/**
	 * @var array
	 */
	public static $lastClearTimePerProduct = [];

	/**
	 * @param $regionId
	 * @param $serviceCode
	 * @param $endPointType
	 *
	 * @return mixed
	 * @throws \AlibabaCloud\Core\Exception\ClientException
	 * @throws \AlibabaCloud\Core\Exception\ServerException
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function findProductDomain($regionId, $serviceCode, $endPointType) {
		$key = $regionId . '#' . $serviceCode;
		@$domain = self::$cache[$key];
		if ($domain === null || $this->checkCacheIsExpire($key) === true) {
			$domain            = $this->findProductDomainFromLocationService($regionId, $serviceCode, $endPointType);
			self::$cache[$key] = $domain;
		}

		return $domain;
	}

	/**
	 * @param $regionId
	 * @param $product
	 * @param $domain
	 */
	public static function addEndPoint($regionId, $product, $domain) {
		$key                                 = $regionId . '#' . $product;
		self::$cache[$key]                   = $domain;
		$lastClearTime                       = mktime(0, 0, 0, 1, 1, 2999);
		self::$lastClearTimePerProduct[$key] = $lastClearTime;
	}

	/**
	 * @param $key
	 *
	 * @return bool
	 */
	private function checkCacheIsExpire($key) {
		@$lastClearTime = self::$lastClearTimePerProduct[$key];
		if ($lastClearTime === null) {
			$lastClearTime                       = time();
			self::$lastClearTimePerProduct[$key] = $lastClearTime;
		}

		$now         = time();
		$elapsedTime = $now - $lastClearTime;

		if ($elapsedTime > CACHE_EXPIRE_TIME) {
			$lastClearTime                       = time();
			self::$lastClearTimePerProduct[$key] = $lastClearTime;
			return true;
		}

		return false;
	}

	/**
	 * @param $regionId
	 * @param $serviceCode
	 * @param $endPointType
	 *
	 * @return mixed
	 * @throws \AlibabaCloud\Core\Exception\ClientException
	 * @throws \AlibabaCloud\Core\Exception\ServerException
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	private function findProductDomainFromLocationService($regionId, $serviceCode, $endPointType) {
		$httpResponse = (new DescribeEndpointRequest($regionId, $serviceCode, $endPointType))->request();

		$Endpoint = $httpResponse['Endpoints']['Endpoint'][0]['Endpoint'];
		AlibabaCloudConfig::set("Endpoints.$regionId.$serviceCode", $Endpoint);
		return $Endpoint;
	}
}