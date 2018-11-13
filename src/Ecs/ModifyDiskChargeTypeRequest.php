<?php

namespace AlibabaCloud\Ecs;

class ModifyDiskChargeTypeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyDiskChargeType', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $diskChargeType;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $autoPay;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $clientToken;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $diskIds;

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
	public function getDiskChargeType() {
		return $this->diskChargeType;
	}

	/**
	 * @param $diskChargeType
	 */
	public function setDiskChargeType($diskChargeType) {
		$this->diskChargeType                    = $diskChargeType;
		$this->apiParameters['DiskChargeType'] = $diskChargeType;
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
	public function getAutoPay() {
		return $this->autoPay;
	}

	/**
	 * @param $autoPay
	 */
	public function setAutoPay($autoPay) {
		$this->autoPay                    = $autoPay;
		$this->apiParameters['AutoPay'] = $autoPay;
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
	public function getClientToken() {
		return $this->clientToken;
	}

	/**
	 * @param $clientToken
	 */
	public function setClientToken($clientToken) {
		$this->clientToken                    = $clientToken;
		$this->apiParameters['ClientToken'] = $clientToken;
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
	public function getDiskIds() {
		return $this->diskIds;
	}

	/**
	 * @param $diskIds
	 */
	public function setDiskIds($diskIds) {
		$this->diskIds                    = $diskIds;
		$this->apiParameters['DiskIds'] = $diskIds;
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