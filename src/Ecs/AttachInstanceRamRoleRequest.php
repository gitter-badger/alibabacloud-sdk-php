<?php

namespace AlibabaCloud\Ecs;

class AttachInstanceRamRoleRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'AttachInstanceRamRole', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $instanceIds;

	/**
	 * @var
	 */
	private $ramRoleName;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @return mixed
	 */
	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	/**
	 * @param $resourceOwnerId
	 */
	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId                    = $resourceOwnerId;
		$this->apiParameters['ResourceOwnerId'] = $resourceOwnerId;
	}

	/**
	 * @return mixed
	 */
	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	/**
	 * @param $resourceOwnerAccount
	 */
	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount                    = $resourceOwnerAccount;
		$this->apiParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
	}

	/**
	 * @return mixed
	 */
	public function getInstanceIds() {
		return $this->instanceIds;
	}

	/**
	 * @param $instanceIds
	 */
	public function setInstanceIds($instanceIds) {
		$this->instanceIds                    = $instanceIds;
		$this->apiParameters['InstanceIds'] = $instanceIds;
	}

	/**
	 * @return mixed
	 */
	public function getRamRoleName() {
		return $this->ramRoleName;
	}

	/**
	 * @param $ramRoleName
	 */
	public function setRamRoleName($ramRoleName) {
		$this->ramRoleName                    = $ramRoleName;
		$this->apiParameters['RamRoleName'] = $ramRoleName;
	}

	/**
	 * @return mixed
	 */
	public function getOwnerId() {
		return $this->ownerId;
	}

	/**
	 * @param $ownerId
	 */
	public function setOwnerId($ownerId) {
		$this->ownerId                    = $ownerId;
		$this->apiParameters['OwnerId'] = $ownerId;
	}

}