<?php

namespace AlibabaCloud\Ecs;

class DescribeSecurityGroupsRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeSecurityGroups', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $dryRun;

	/**
	 * @var
	 */
	private $fuzzyQuery;

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
	private $securityGroupId;

	/**
	 * @var
	 */
	private $isQueryEcsCount;

	/**
	 * @var
	 */
	private $networkType;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $securityGroupIds;

	/**
	 * @var
	 */
	private $securityGroupName;

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
	private $vpcId;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $Tags;

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
	public function getFuzzyQuery() {
		return $this->fuzzyQuery;
	}

	/**
	 * @param $fuzzyQuery
	 */
	public function setFuzzyQuery($fuzzyQuery) {
		$this->fuzzyQuery                    = $fuzzyQuery;
		$this->apiParameters['FuzzyQuery'] = $fuzzyQuery;
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
	public function getSecurityGroupId() {
		return $this->securityGroupId;
	}

	/**
	 * @param $securityGroupId
	 */
	public function setSecurityGroupId($securityGroupId) {
		$this->securityGroupId                    = $securityGroupId;
		$this->apiParameters['SecurityGroupId'] = $securityGroupId;
	}

	/**
	 * @return mixed
	 */
	public function getIsQueryEcsCount() {
		return $this->isQueryEcsCount;
	}

	/**
	 * @param $isQueryEcsCount
	 */
	public function setIsQueryEcsCount($isQueryEcsCount) {
		$this->isQueryEcsCount                    = $isQueryEcsCount;
		$this->apiParameters['IsQueryEcsCount'] = $isQueryEcsCount;
	}

	/**
	 * @return mixed
	 */
	public function getNetworkType() {
		return $this->networkType;
	}

	/**
	 * @param $networkType
	 */
	public function setNetworkType($networkType) {
		$this->networkType                    = $networkType;
		$this->apiParameters['NetworkType'] = $networkType;
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
	public function getSecurityGroupIds() {
		return $this->securityGroupIds;
	}

	/**
	 * @param $securityGroupIds
	 */
	public function setSecurityGroupIds($securityGroupIds) {
		$this->securityGroupIds                    = $securityGroupIds;
		$this->apiParameters['SecurityGroupIds'] = $securityGroupIds;
	}

	/**
	 * @return mixed
	 */
	public function getSecurityGroupName() {
		return $this->securityGroupName;
	}

	/**
	 * @param $securityGroupName
	 */
	public function setSecurityGroupName($securityGroupName) {
		$this->securityGroupName                    = $securityGroupName;
		$this->apiParameters['SecurityGroupName'] = $securityGroupName;
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
	public function getVpcId() {
		return $this->vpcId;
	}

	/**
	 * @param $vpcId
	 */
	public function setVpcId($vpcId) {
		$this->vpcId                    = $vpcId;
		$this->apiParameters['VpcId'] = $vpcId;
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

}