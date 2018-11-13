<?php

namespace AlibabaCloud\Ecs;

class InvokeCommandRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'InvokeCommand', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $commandId;

	/**
	 * @var
	 */
	private $frequency;

	/**
	 * @var
	 */
	private $timed;

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
	private $ownerId;

	/**
	 * @var
	 */
	private $InstanceIds;

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
	public function getCommandId() {
		return $this->commandId;
	}

	/**
	 * @param $commandId
	 */
	public function setCommandId($commandId) {
		$this->commandId                    = $commandId;
		$this->apiParameters['CommandId'] = $commandId;
	}

	/**
	 * @return mixed
	 */
	public function getFrequency() {
		return $this->frequency;
	}

	/**
	 * @param $frequency
	 */
	public function setFrequency($frequency) {
		$this->frequency                    = $frequency;
		$this->apiParameters['Frequency'] = $frequency;
	}

	/**
	 * @return mixed
	 */
	public function getTimed() {
		return $this->timed;
	}

	/**
	 * @param $timed
	 */
	public function setTimed($timed) {
		$this->timed                    = $timed;
		$this->apiParameters['Timed'] = $timed;
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
	public function getInstanceIds() {
		return $this->InstanceIds;
	}

	/**
	 * @param $InstanceIds
	 */
	public function setInstanceIds($InstanceIds) {
		$this->InstanceIds = $InstanceIds;
		for ($i = 0; $i < count($InstanceIds); $i++) {
			$this->apiParameters['InstanceId.' . ($i + 1)] = $InstanceIds[$i];
		}
	}

}