<?php

namespace AlibabaCloud\Ecs;

class ModifySecurityGroupRuleRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifySecurityGroupRule', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $nicType;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $sourcePortRange;

	/**
	 * @var
	 */
	private $clientToken;

	/**
	 * @var
	 */
	private $securityGroupId;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $sourceGroupOwnerId;

	/**
	 * @var
	 */
	private $sourceGroupOwnerAccount;

	/**
	 * @var
	 */
	private $policy;

	/**
	 * @var
	 */
	private $portRange;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $ipProtocol;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $sourceCidrIp;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $priority;

	/**
	 * @var
	 */
	private $destCidrIp;

	/**
	 * @var
	 */
	private $sourceGroupId;






}