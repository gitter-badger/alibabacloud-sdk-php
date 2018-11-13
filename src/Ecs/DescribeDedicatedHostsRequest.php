<?php

namespace AlibabaCloud\Ecs;

class DescribeDedicatedHostsRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeDedicatedHosts', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $dedicatedHostIds;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $dedicatedHostName;

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
	private $pageNumber;

	/**
	 * @var
	 */
	private $resourceGroupId;

	/**
	 * @var
	 */
	private $lockReason;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $zoneId;

	/**
	 * @var
	 */
	private $dedicatedHostType;

	/**
	 * @var
	 */
	private $Tags;

	/**
	 * @var
	 */
	private $status;

	/**
	 * @return mixed
	 */
	public function getDedicatedHostIds() {
		return $this->dedicatedHostIds;
	}

	/**
	 * @param $dedicatedHostIds
	 */
	public function setDedicatedHostIds($dedicatedHostIds) {
		$this->dedicatedHostIds                    = $dedicatedHostIds;
		$this->apiParameters['DedicatedHostIds'] = $dedicatedHostIds;
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
	public function getDedicatedHostName() {
		return $this->dedicatedHostName;
	}

	/**
	 * @param $dedicatedHostName
	 */
	public function setDedicatedHostName($dedicatedHostName) {
		$this->dedicatedHostName                    = $dedicatedHostName;
		$this->apiParameters['DedicatedHostName'] = $dedicatedHostName;
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
	public function getPageNumber() {
		return $this->pageNumber;
	}

	/**
	 * @param $pageNumber
	 */
	public function setPageNumber($pageNumber) {
		$this->pageNumber                    = $pageNumber;
		$this->apiParameters['PageNumber'] = $pageNumber;
	}

	/**
	 * @return mixed
	 */
	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	/**
	 * @param $resourceGroupId
	 */
	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId                    = $resourceGroupId;
		$this->apiParameters['ResourceGroupId'] = $resourceGroupId;
	}

	/**
	 * @return mixed
	 */
	public function getLockReason() {
		return $this->lockReason;
	}

	/**
	 * @param $lockReason
	 */
	public function setLockReason($lockReason) {
		$this->lockReason                    = $lockReason;
		$this->apiParameters['LockReason'] = $lockReason;
	}

	/**
	 * @return mixed
	 */
	public function getPageSize() {
		return $this->pageSize;
	}

	/**
	 * @param $pageSize
	 */
	public function setPageSize($pageSize) {
		$this->pageSize                    = $pageSize;
		$this->apiParameters['PageSize'] = $pageSize;
	}

	/**
	 * @return mixed
	 */
	public function getZoneId() {
		return $this->zoneId;
	}

	/**
	 * @param $zoneId
	 */
	public function setZoneId($zoneId) {
		$this->zoneId                    = $zoneId;
		$this->apiParameters['ZoneId'] = $zoneId;
	}

	/**
	 * @return mixed
	 */
	public function getDedicatedHostType() {
		return $this->dedicatedHostType;
	}

	/**
	 * @param $dedicatedHostType
	 */
	public function setDedicatedHostType($dedicatedHostType) {
		$this->dedicatedHostType                    = $dedicatedHostType;
		$this->apiParameters['DedicatedHostType'] = $dedicatedHostType;
	}

	/**
	 * @return mixed
	 */
	public function getTags() {
		return $this->Tags;
	}

	/**
	 * @param $Tags
	 */
	public function setTags($Tags) {
		$this->Tags = $Tags;
		for ($i = 0; $i < count($Tags); $i++) {
			$this->apiParameters['Tag.' . ($i + 1) . '.Value'] = $Tags[$i]['Value'];
			$this->apiParameters['Tag.' . ($i + 1) . '.Key']   = $Tags[$i]['Key'];
		}
	}

	/**
	 * @return mixed
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param $status
	 */
	public function setStatus($status) {
		$this->status                    = $status;
		$this->apiParameters['Status'] = $status;
	}

}