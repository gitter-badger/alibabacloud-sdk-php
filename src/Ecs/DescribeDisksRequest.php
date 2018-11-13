<?php

namespace AlibabaCloud\Ecs;

class DescribeDisksRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeDisks', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $snapshotId;

	/**
	 * @var
	 */
	private $filter2Value;

	/**
	 * @var
	 */
	private $autoSnapshotPolicyId;

	/**
	 * @var
	 */
	private $pageNumber;

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
	private $resourceGroupId;

	/**
	 * @var
	 */
	private $diskChargeType;

	/**
	 * @var
	 */
	private $lockReason;

	/**
	 * @var
	 */
	private $filter1Key;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $diskIds;

	/**
	 * @var
	 */
	private $Tags;

	/**
	 * @var
	 */
	private $deleteWithInstance;

	/**
	 * @var
	 */
	private $enableAutoSnapshot;

	/**
	 * @var
	 */
	private $dryRun;

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
	private $filter1Value;

	/**
	 * @var
	 */
	private $portable;

	/**
	 * @var
	 */
	private $enableAutomatedSnapshotPolicy;

	/**
	 * @var
	 */
	private $filter2Key;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $diskType;

	/**
	 * @var
	 */
	private $AdditionalAttributess;

	/**
	 * @var
	 */
	private $enableShared;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $encrypted;

	/**
	 * @var
	 */
	private $zoneId;

	/**
	 * @var
	 */
	private $category;

	/**
	 * @var
	 */
	private $status;

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
	public function getSnapshotId() {
		return $this->snapshotId;
	}

	/**
	 * @param $snapshotId
	 */
	public function setSnapshotId($snapshotId) {
		$this->snapshotId                    = $snapshotId;
		$this->apiParameters['SnapshotId'] = $snapshotId;
	}

	/**
	 * @return mixed
	 */
	public function getFilter2Value() {
		return $this->filter2Value;
	}

	/**
	 * @param $filter2Value
	 */
	public function setFilter2Value($filter2Value) {
		$this->filter2Value                      = $filter2Value;
		$this->apiParameters['Filter.2.Value'] = $filter2Value;
	}

	/**
	 * @return mixed
	 */
	public function getAutoSnapshotPolicyId() {
		return $this->autoSnapshotPolicyId;
	}

	/**
	 * @param $autoSnapshotPolicyId
	 */
	public function setAutoSnapshotPolicyId($autoSnapshotPolicyId) {
		$this->autoSnapshotPolicyId                    = $autoSnapshotPolicyId;
		$this->apiParameters['AutoSnapshotPolicyId'] = $autoSnapshotPolicyId;
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
	public function getFilter1Key() {
		return $this->filter1Key;
	}

	/**
	 * @param $filter1Key
	 */
	public function setFilter1Key($filter1Key) {
		$this->filter1Key                      = $filter1Key;
		$this->apiParameters['Filter.1.Key'] = $filter1Key;
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
	public function getDryRun() {
		return $this->dryRun;
	}

	/**
	 * @param $dryRun
	 */
	public function setDryRun($dryRun) {
		$this->dryRun                    = $dryRun;
		$this->apiParameters['DryRun'] = $dryRun;
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
	public function getFilter1Value() {
		return $this->filter1Value;
	}

	/**
	 * @param $filter1Value
	 */
	public function setFilter1Value($filter1Value) {
		$this->filter1Value                      = $filter1Value;
		$this->apiParameters['Filter.1.Value'] = $filter1Value;
	}

	/**
	 * @return mixed
	 */
	public function getPortable() {
		return $this->portable;
	}

	/**
	 * @param $portable
	 */
	public function setPortable($portable) {
		$this->portable                    = $portable;
		$this->apiParameters['Portable'] = $portable;
	}

	/**
	 * @return mixed
	 */
	public function getEnableAutomatedSnapshotPolicy() {
		return $this->enableAutomatedSnapshotPolicy;
	}

	/**
	 * @param $enableAutomatedSnapshotPolicy
	 */
	public function setEnableAutomatedSnapshotPolicy($enableAutomatedSnapshotPolicy) {
		$this->enableAutomatedSnapshotPolicy                    = $enableAutomatedSnapshotPolicy;
		$this->apiParameters['EnableAutomatedSnapshotPolicy'] = $enableAutomatedSnapshotPolicy;
	}

	/**
	 * @return mixed
	 */
	public function getFilter2Key() {
		return $this->filter2Key;
	}

	/**
	 * @param $filter2Key
	 */
	public function setFilter2Key($filter2Key) {
		$this->filter2Key                      = $filter2Key;
		$this->apiParameters['Filter.2.Key'] = $filter2Key;
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
	public function getDiskType() {
		return $this->diskType;
	}

	/**
	 * @param $diskType
	 */
	public function setDiskType($diskType) {
		$this->diskType                    = $diskType;
		$this->apiParameters['DiskType'] = $diskType;
	}

	/**
	 * @return mixed
	 */
	public function getAdditionalAttributess() {
		return $this->AdditionalAttributess;
	}

	/**
	 * @param $AdditionalAttributess
	 */
	public function setAdditionalAttributess($AdditionalAttributess) {
		$this->AdditionalAttributess = $AdditionalAttributess;
		for ($i = 0; $i < count($AdditionalAttributess); $i++) {
			$this->apiParameters['AdditionalAttributes.' . ($i + 1)] = $AdditionalAttributess[$i];
		}
	}

	/**
	 * @return mixed
	 */
	public function getEnableShared() {
		return $this->enableShared;
	}

	/**
	 * @param $enableShared
	 */
	public function setEnableShared($enableShared) {
		$this->enableShared                    = $enableShared;
		$this->apiParameters['EnableShared'] = $enableShared;
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
	public function getEncrypted() {
		return $this->encrypted;
	}

	/**
	 * @param $encrypted
	 */
	public function setEncrypted($encrypted) {
		$this->encrypted                    = $encrypted;
		$this->apiParameters['Encrypted'] = $encrypted;
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
	public function getCategory() {
		return $this->category;
	}

	/**
	 * @param $category
	 */
	public function setCategory($category) {
		$this->category                    = $category;
		$this->apiParameters['Category'] = $category;
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