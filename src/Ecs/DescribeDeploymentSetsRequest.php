<?php

namespace AlibabaCloud\Ecs;

class DescribeDeploymentSetsRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeDeploymentSets', 'ecs', 'openAPI');
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
	private $ownerAccount;

	/**
	 * @var
	 */
	private $networkType;

	/**
	 * @var
	 */
	private $deploymentSetName;

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
	private $deploymentSetIds;

	/**
	 * @var
	 */
	private $granularity;

	/**
	 * @var
	 */
	private $domain;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $strategy;

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
	public function getDeploymentSetName() {
		return $this->deploymentSetName;
	}

	/**
	 * @param $deploymentSetName
	 */
	public function setDeploymentSetName($deploymentSetName) {
		$this->deploymentSetName                    = $deploymentSetName;
		$this->apiParameters['DeploymentSetName'] = $deploymentSetName;
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
	public function getDeploymentSetIds() {
		return $this->deploymentSetIds;
	}

	/**
	 * @param $deploymentSetIds
	 */
	public function setDeploymentSetIds($deploymentSetIds) {
		$this->deploymentSetIds                    = $deploymentSetIds;
		$this->apiParameters['DeploymentSetIds'] = $deploymentSetIds;
	}

	/**
	 * @return mixed
	 */
	public function getGranularity() {
		return $this->granularity;
	}

	/**
	 * @param $granularity
	 */
	public function setGranularity($granularity) {
		$this->granularity                    = $granularity;
		$this->apiParameters['Granularity'] = $granularity;
	}

	/**
	 * @return mixed
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * @param $domain
	 */
	public function setDomain($domain) {
		$this->domain                    = $domain;
		$this->apiParameters['Domain'] = $domain;
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
	public function getStrategy() {
		return $this->strategy;
	}

	/**
	 * @param $strategy
	 */
	public function setStrategy($strategy) {
		$this->strategy                    = $strategy;
		$this->apiParameters['Strategy'] = $strategy;
	}

}