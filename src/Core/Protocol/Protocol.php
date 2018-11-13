<?php

namespace AlibabaCloud\Core\Protocol;

use AlibabaCloud\Core\Exception\ClientException;
use AlibabaCloud\Core\Exception\ServerException;
use AlibabaCloud\Core\Regions\LocationService;
use AlibabaCloud\Core\Request\Request;
use AlibabaCloud\Core\Result\Result;
use GuzzleHttp\Exception\GuzzleException;

abstract class Protocol {

	/**
	 * @var Request
	 */
	protected $request;

	/**
	 * Protocol constructor.
	 *
	 * @param Request $request
	 */
	public function __construct(Request $request) {
		$this->request = $request;
	}

	/**
	 * @return Result
	 * @throws ClientException
	 * @throws GuzzleException
	 * @throws ServerException
	 */
	abstract public function request();

	/**
	 * @param $postFields
	 *
	 * @return bool|string
	 */
	public static function getPostHttpBody($postFields) {
		$content = '';
		foreach ($postFields as $apiParamKey => $apiParamValue) {
			$content .= "$apiParamKey=" . urlencode($apiParamValue) . '&';
		}
		return substr($content, 0, -1);
	}

	/**
	 *
	 * @return array
	 */
	protected function getHttpHeaders() {
		$this->request->headers['x-acs-version'] = $this->request->version;
		$httpHeader                              = [];
		foreach ($this->request->headers as $key => $value) {
			$httpHeader[] = $key . ':' . $value;
		}
		return $httpHeader;
	}

	/**
	 * @return string
	 * @throws ClientException
	 * @throws GuzzleException
	 * @throws ServerException
	 */
	protected function getDomain() {
		// DIY First
		if ($this->request->domain) {
			return $this->request->domain;
		}

		// Cache Second

		// Config Third
		//$path                  = 'Endpoints.' . $this->request->getRegionId() . '.' . $this->request->serviceCode;
		//$this->request->domain = AlibabaCloudConfig::get($path);

		if (null === $this->request->domain && $this->request->getServiceCode()) {
			$this->request->domain = (new LocationService())->findProductDomain($this->request->getRegionId(),
																				$this->request->getServiceCode(),
																				$this->request->getType());
		}

		// Query Fourth
		if (null === $this->request->domain) {
			throw new ClientException('Can not find endpoint to access.', 'SDK.InvalidRegionId');
		}

		return $this->request->domain;
	}

}