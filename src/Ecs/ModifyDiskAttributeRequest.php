<?php

namespace AlibabaCloud\Ecs;

class ModifyDiskAttributeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyDiskAttribute', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $diskName;

	/**
	 * @var
	 */
	private $deleteAutoSnapshot;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $enableAutoSnapshot;

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
	private $description;

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
	private $deleteWithInstance;

	/**
	 * @return mixed
	 */
	public function getDiskName() {
		return $this->diskName;
	}

	/**
	 * @param $diskName
	 */
	public function setDiskName($diskName) {
		$this->diskName                    = $diskName;
		$this->apiParameters['DiskName'] = $diskName;
	}

	/**
	 * @return mixed
	 */
	public function getDeleteAutoSnapshot() {
		return $this->deleteAutoSnapshot;
	}

	/**
	 * @param $deleteAutoSnapshot
	 */
	public function setDeleteAutoSnapshot($deleteAutoSnapshot) {
		$this->deleteAutoSnapshot                    = $deleteAutoSnapshot;
		$this->apiParameters['DeleteAutoSnapshot'] = $deleteAutoSnapshot;
	}

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
	public function getEnableAutoSnapshot() {
		return $this->enableAutoSnapshot;
	}

	/**
	 * @param $enableAutoSnapshot
	 */
	public function setEnableAutoSnapshot($enableAutoSnapshot) {
		$this->enableAutoSnapshot                    = $enableAutoSnapshot;
		$this->apiParameters['EnableAutoSnapshot'] = $enableAutoSnapshot;
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
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param $description
	 */
	public function setDescription($description) {
		$this->description                    = $description;
		$this->apiParameters['Description'] = $description;
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