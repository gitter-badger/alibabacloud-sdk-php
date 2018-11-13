<?php

namespace AlibabaCloud\Ecs;

class DescribeEipAddressesRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeEipAddresses', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $filter2Value;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $allocationId;

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
	private $eipAddress;

	/**
	 * @var
	 */
	private $pageNumber;

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
	private $associatedInstanceType;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $chargeType;

	/**
	 * @var
	 */
	private $associatedInstanceId;

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
	public function getAllocationId() {
		return $this->allocationId;
	}

	/**
	 * @param $allocationId
	 */
	public function setAllocationId($allocationId) {
		$this->allocationId                    = $allocationId;
		$this->apiParameters['AllocationId'] = $allocationId;
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
	public function getEipAddress() {
		return $this->eipAddress;
	}

	/**
	 * @param $eipAddress
	 */
	public function setEipAddress($eipAddress) {
		$this->eipAddress                    = $eipAddress;
		$this->apiParameters['EipAddress'] = $eipAddress;
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
	public function getAssociatedInstanceType() {
		return $this->associatedInstanceType;
	}

	/**
	 * @param $associatedInstanceType
	 */
	public function setAssociatedInstanceType($associatedInstanceType) {
		$this->associatedInstanceType                    = $associatedInstanceType;
		$this->apiParameters['AssociatedInstanceType'] = $associatedInstanceType;
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
	public function getChargeType() {
		return $this->chargeType;
	}

	/**
	 * @param $chargeType
	 */
	public function setChargeType($chargeType) {
		$this->chargeType                    = $chargeType;
		$this->apiParameters['ChargeType'] = $chargeType;
	}

	/**
	 * @return mixed
	 */
	public function getAssociatedInstanceId() {
		return $this->associatedInstanceId;
	}

	/**
	 * @param $associatedInstanceId
	 */
	public function setAssociatedInstanceId($associatedInstanceId) {
		$this->associatedInstanceId                    = $associatedInstanceId;
		$this->apiParameters['AssociatedInstanceId'] = $associatedInstanceId;
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