<?php

namespace AlibabaCloud\Ecs;

class StopInstanceRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'StopInstance', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $confirmStop;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $stoppedMode;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $forceStop;

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
	public function getConfirmStop() {
		return $this->confirmStop;
	}

	/**
	 * @param $confirmStop
	 */
	public function setConfirmStop($confirmStop) {
		$this->confirmStop                    = $confirmStop;
		$this->apiParameters['ConfirmStop'] = $confirmStop;
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
	public function getStoppedMode() {
		return $this->stoppedMode;
	}

	/**
	 * @param $stoppedMode
	 */
	public function setStoppedMode($stoppedMode) {
		$this->stoppedMode                    = $stoppedMode;
		$this->apiParameters['StoppedMode'] = $stoppedMode;
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
	public function getForceStop() {
		return $this->forceStop;
	}

	/**
	 * @param $forceStop
	 */
	public function setForceStop($forceStop) {
		$this->forceStop                    = $forceStop;
		$this->apiParameters['ForceStop'] = $forceStop;
	}

}