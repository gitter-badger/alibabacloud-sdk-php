<?php

namespace AlibabaCloud\Ecs;

class DescribeSnapshotsRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeSnapshots', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $filter2Value;

	/**
	 * @var
	 */
	private $snapshotIds;

	/**
	 * @var
	 */
	private $usage;

	/**
	 * @var
	 */
	private $snapshotLinkId;

	/**
	 * @var
	 */
	private $snapshotName;

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
	private $filter1Key;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $diskId;

	/**
	 * @var
	 */
	private $Tags;

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
	private $sourceDiskType;

	/**
	 * @var
	 */
	private $filter1Value;

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
	private $instanceId;

	/**
	 * @var
	 */
	private $encrypted;

	/**
	 * @var
	 */
	private $snapshotType;

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
	public function getSnapshotIds() {
		return $this->snapshotIds;
	}

	/**
	 * @param $snapshotIds
	 */
	public function setSnapshotIds($snapshotIds) {
		$this->snapshotIds                    = $snapshotIds;
		$this->apiParameters['SnapshotIds'] = $snapshotIds;
	}

	/**
	 * @return mixed
	 */
	public function getUsage() {
		return $this->usage;
	}

	/**
	 * @param $usage
	 */
	public function setUsage($usage) {
		$this->usage                    = $usage;
		$this->apiParameters['Usage'] = $usage;
	}

	/**
	 * @return mixed
	 */
	public function getSnapshotLinkId() {
		return $this->snapshotLinkId;
	}

	/**
	 * @param $snapshotLinkId
	 */
	public function setSnapshotLinkId($snapshotLinkId) {
		$this->snapshotLinkId                    = $snapshotLinkId;
		$this->apiParameters['SnapshotLinkId'] = $snapshotLinkId;
	}

	/**
	 * @return mixed
	 */
	public function getSnapshotName() {
		return $this->snapshotName;
	}

	/**
	 * @param $snapshotName
	 */
	public function setSnapshotName($snapshotName) {
		$this->snapshotName                    = $snapshotName;
		$this->apiParameters['SnapshotName'] = $snapshotName;
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
	public function getSourceDiskType() {
		return $this->sourceDiskType;
	}

	/**
	 * @param $sourceDiskType
	 */
	public function setSourceDiskType($sourceDiskType) {
		$this->sourceDiskType                    = $sourceDiskType;
		$this->apiParameters['SourceDiskType'] = $sourceDiskType;
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
	public function getSnapshotType() {
		return $this->snapshotType;
	}

	/**
	 * @param $snapshotType
	 */
	public function setSnapshotType($snapshotType) {
		$this->snapshotType                    = $snapshotType;
		$this->apiParameters['SnapshotType'] = $snapshotType;
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