<?php

namespace AlibabaCloud\Ecs;

use AlibabaCloud\Core\Request\RpcRequest;

/**
 * Class DescribeRegionsRequest
 *
 * @package AlibabaCloud\Ecs
 */
class DescribeRegionsRequest extends RpcRequest {

	/**
	 * DescribeRegionsRequest constructor.
	 *
	 * @param mixed ...$parameters
	 *
	 * @throws \AlibabaCloud\Core\Exception\ClientException
	 */
	public function __construct(...$parameters) {
		parent::__construct(...$parameters);
		$this->setVersion('2014-05-26');
	}

	/**
	 * @var string
	 * @api
	 */
	public $resourceOwnerId;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $acceptLanguage;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $instanceChargeType;

	/**
	 * @var
	 */
	private $resourceType;



}