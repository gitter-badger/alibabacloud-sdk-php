<?php

namespace AlibabaCloud\Ecs;

class DescribeDeploymentSetTopologyRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeDeploymentSetTopology', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $deploymentSetId;

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
	private $granularity;

	/**
	 * @var
	 */
	private $domain;

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
	private $strategy;

	/**
	 * @return mixed
	 */
	public function getDeploymentSetId() {
		return $this->deploymentSetId;
	}

	/**
	 * @param $deploymentSetId
	 */
	public function setDeploymentSetId($deploymentSetId) {
		$this->deploymentSetId                    = $deploymentSetId;
		$this->apiParameters['DeploymentSetId'] = $deploymentSetId;
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