<?php

namespace AlibabaCloud\Ecs;

class ModifyInstanceDeploymentRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyInstanceDeployment', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $deploymentSetId;

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
	private $dedicatedHostId;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $force;

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
	public function getDeploymentSetId() {
		return $this->deploymentSetId;
	}

	/**
	 * @param $deploymentSetId
	 */
	public function setDeploymentSetId($deploymentSetId) {
		$this->deploymentSetId                    = $deploymentSetId;
		$this->apiParameters['DeploymentSetId'] = $deploymentSetId;
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
	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	/**
	 * @param $ownerAccount
	 */
	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount                    = $ownerAccount;
		$this->apiParameters['OwnerAccount'] = $ownerAccount;
	}

	/**
	 * @return mixed
	 */
	public function getDedicatedHostId() {
		return $this->dedicatedHostId;
	}

	/**
	 * @param $dedicatedHostId
	 */
	public function setDedicatedHostId($dedicatedHostId) {
		$this->dedicatedHostId                    = $dedicatedHostId;
		$this->apiParameters['DedicatedHostId'] = $dedicatedHostId;
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

	/**
	 * @return mixed
	 */
	public function getInstanceId() {
		return $this->instanceId;
	}

	/**
	 * @param $instanceId
	 */
	public function setInstanceId($instanceId) {
		$this->instanceId                    = $instanceId;
		$this->apiParameters['InstanceId'] = $instanceId;
	}

	/**
	 * @return mixed
	 */
	public function getForce() {
		return $this->force;
	}

	/**
	 * @param $force
	 */
	public function setForce($force) {
		$this->force                    = $force;
		$this->apiParameters['Force'] = $force;
	}

}