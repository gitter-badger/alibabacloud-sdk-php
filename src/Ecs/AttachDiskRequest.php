<?php

namespace AlibabaCloud\Ecs;

class AttachDiskRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'AttachDisk', 'ecs', 'openAPI');
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
	private $ownerAccount;

	/**
	 * @var
	 */
	private $diskId;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $device;

	/**
	 * @var
	 */
	private $deleteWithInstance;

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
	public function getDiskId() {
		return $this->diskId;
	}

	/**
	 * @param $diskId
	 */
	public function setDiskId($diskId) {
		$this->diskId                    = $diskId;
		$this->apiParameters['DiskId'] = $diskId;
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
	public function getDevice() {
		return $this->device;
	}

	/**
	 * @param $device
	 */
	public function setDevice($device) {
		$this->device                    = $device;
		$this->apiParameters['Device'] = $device;
	}

	/**
	 * @return mixed
	 */
	public function getDeleteWithInstance() {
		return $this->deleteWithInstance;
	}

	/**
	 * @param $deleteWithInstance
	 */
	public function setDeleteWithInstance($deleteWithInstance) {
		$this->deleteWithInstance                    = $deleteWithInstance;
		$this->apiParameters['DeleteWithInstance'] = $deleteWithInstance;
	}

}