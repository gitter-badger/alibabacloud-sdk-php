<?php

namespace AlibabaCloud\Ecs;

class DescribeImagesRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeImages', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $actionType;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $imageId;

	/**
	 * @var
	 */
	private $snapshotId;

	/**
	 * @var
	 */
	private $usage;

	/**
	 * @var
	 */
	private $pageNumber;

	/**
	 * @var
	 */
	private $imageOwnerAlias;

	/**
	 * @var
	 */
	private $resourceGroupId;

	/**
	 * @var
	 */
	private $isSupportIoOptimized;

	/**
	 * @var
	 */
	private $imageName;

	/**
	 * @var
	 */
	private $isSupportCloudinit;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $instanceType;

	/**
	 * @var
	 */
	private $Tags;

	/**
	 * @var
	 */
	private $architecture;

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
	private $showExpired;

	/**
	 * @var
	 */
	private $oSType;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $Filters;

	/**
	 * @var
	 */
	private $status;

	/**
	 * @return mixed
	 */
	public function getActionType() {
		return $this->actionType;
	}

	/**
	 * @param $actionType
	 */
	public function setActionType($actionType) {
		$this->actionType                    = $actionType;
		$this->apiParameters['ActionType'] = $actionType;
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
	public function getImageId() {
		return $this->imageId;
	}

	/**
	 * @param $imageId
	 */
	public function setImageId($imageId) {
		$this->imageId                    = $imageId;
		$this->apiParameters['ImageId'] = $imageId;
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
	public function getImageOwnerAlias() {
		return $this->imageOwnerAlias;
	}

	/**
	 * @param $imageOwnerAlias
	 */
	public function setImageOwnerAlias($imageOwnerAlias) {
		$this->imageOwnerAlias                    = $imageOwnerAlias;
		$this->apiParameters['ImageOwnerAlias'] = $imageOwnerAlias;
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
	public function getIsSupportIoOptimized() {
		return $this->isSupportIoOptimized;
	}

	/**
	 * @param $isSupportIoOptimized
	 */
	public function setIsSupportIoOptimized($isSupportIoOptimized) {
		$this->isSupportIoOptimized                    = $isSupportIoOptimized;
		$this->apiParameters['IsSupportIoOptimized'] = $isSupportIoOptimized;
	}

	/**
	 * @return mixed
	 */
	public function getImageName() {
		return $this->imageName;
	}

	/**
	 * @param $imageName
	 */
	public function setImageName($imageName) {
		$this->imageName                    = $imageName;
		$this->apiParameters['ImageName'] = $imageName;
	}

	/**
	 * @return mixed
	 */
	public function getIsSupportCloudinit() {
		return $this->isSupportCloudinit;
	}

	/**
	 * @param $isSupportCloudinit
	 */
	public function setIsSupportCloudinit($isSupportCloudinit) {
		$this->isSupportCloudinit                    = $isSupportCloudinit;
		$this->apiParameters['IsSupportCloudinit'] = $isSupportCloudinit;
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
	public function getInstanceType() {
		return $this->instanceType;
	}

	/**
	 * @param $instanceType
	 */
	public function setInstanceType($instanceType) {
		$this->instanceType                    = $instanceType;
		$this->apiParameters['InstanceType'] = $instanceType;
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
	public function getArchitecture() {
		return $this->architecture;
	}

	/**
	 * @param $architecture
	 */
	public function setArchitecture($architecture) {
		$this->architecture                    = $architecture;
		$this->apiParameters['Architecture'] = $architecture;
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
	public function getShowExpired() {
		return $this->showExpired;
	}

	/**
	 * @param $showExpired
	 */
	public function setShowExpired($showExpired) {
		$this->showExpired                    = $showExpired;
		$this->apiParameters['ShowExpired'] = $showExpired;
	}

	/**
	 * @return mixed
	 */
	public function getOSType() {
		return $this->oSType;
	}

	/**
	 * @param $oSType
	 */
	public function setOSType($oSType) {
		$this->oSType                    = $oSType;
		$this->apiParameters['OSType'] = $oSType;
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
	public function getFilters() {
		return $this->Filters;
	}

	/**
	 * @param $Filters
	 */
	public function setFilters($Filters) {
		$this->Filters = $Filters;
		for ($i = 0; $i < count($Filters); $i++) {
			$this->apiParameters['Filter.' . ($i + 1) . '.Value'] = $Filters[$i]['Value'];
			$this->apiParameters['Filter.' . ($i + 1) . '.Key']   = $Filters[$i]['Key'];
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