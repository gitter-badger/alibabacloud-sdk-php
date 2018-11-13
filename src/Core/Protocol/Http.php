<?php

namespace AlibabaCloud\Core\Protocol;

use AlibabaCloud\Core\Exception\ServerException;
use AlibabaCloud\Core\Exception\ClientException;
use AlibabaCloud\Core\Result\Result;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Http
 *
 * @package AlibabaCloud\Core\Protocol
 */
class Http extends Protocol {

	/**
	 * @return array
	 */
	private function getClientOptions() {
		$options = [];
		if (\strtoupper($this->request->method) === 'POST') {
			$options['form_params'] = $this->request->getApiParameters();
		}
		if ($this->getHttpHeaders()) {
			$options['headers'] = $this->getHttpHeaders();
		}
		if ($this->request->connectTimeout) {
			$options['connect_timeout'] = $this->request->connectTimeout;
		}
		if ($this->request->timeout) {
			$options['timeout'] = $this->request->timeout;
		}
		if ($this->request->debug) {
			$options['debug'] = $this->request->debug;
		}
		if ($this->request->readTimeout) {
			$options['read_timeout'] = $this->request->readTimeout;
		}
		if ($this->request->proxy) {
			$options['proxy'] = $this->request->proxy;
		}
		if ($this->request->cert) {
			$options['cert'] = $this->request->cert;
		}
		return $options;
	}

	/**
	 * @return Result
	 * @throws GuzzleException
	 * @throws ServerException
	 * @throws \AlibabaCloud\Core\Exception\ClientException
	 */
	public function request() {

		try {
			$client = new Client([
									 'base_uri' => 'http://' . $this->getDomain(),
								 ]);

			if ($this->request->debug) {
				\dump($this->getDomain(), $this->request->getApiParameters(), $this->request->getQueryString());
			}

			$response = $client->request($this->request->method,
										 $this->request->getQueryString(),
										 $this->getClientOptions());
		} catch (\GuzzleHttp\Exception\BadResponseException $exception) {
			if (\method_exists($exception, 'getResponse') && \method_exists($exception->getResponse(), 'getBody')) {
				$responseBody = $exception->getResponse()->getBody()->getContents();
				$responseBody = \json_decode($responseBody, true);
				if (isset($responseBody['Code'])) {
					throw new ServerException($responseBody['Message'],
											  $responseBody['Code'],
											  $exception->getResponse()->getStatusCode(),
											  $responseBody['RequestId']);
				}
			}
			throw new \RuntimeException($exception->getMessage());
		} catch (\Exception $exception) {
			throw new \RuntimeException($exception->getMessage());
		}

		return new Result(\GuzzleHttp\json_decode($response->getBody()->getContents(),
												  true));
	}

}