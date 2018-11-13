<?php

namespace AlibabaCloud\Core\Regions;

use AlibabaCloud\Core\Request\RpcRequest;

/**
 * Class DescribeEndpointRequest
 *
 * @package AlibabaCloud\Core\Regions
 */
class DescribeEndpointRequest extends RpcRequest {

	/**
	 * @var string
	 */
	public $domain = 'location.aliyuncs.com';

	/**
	 * DescribeEndpointRequest constructor.
	 *
	 * @param mixed ...$parameters
	 *
	 * @throws \AlibabaCloud\Core\Exception\ClientException
	 */
	public function __construct(...$parameters) {
		parent::__construct(...$parameters);
		$this->setServiceCode('ecs');
		$this->setVersion('2015-06-12');
		$this->setRegionId('cn-hangzhou');
		$this->setAction('DescribeEndpoints');
	}

}