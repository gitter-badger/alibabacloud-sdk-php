<?php

namespace AlibabaCloud\Ecs;

class CreateDeploymentSetRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'CreateDeploymentSet', 'ecs', 'openAPI');
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
	private $clientToken;

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
	private $deploymentSetName;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $onUnableToRedeployFailedInstance;

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
	public function getClientToken() {
		return $this->clientToken;
	}

	/**
	 * @param $clientToken
	 */
	public function setClientToken($clientToken) {
		$this->clientToken                    = $clientToken;
		$this->apiParameters['ClientToken'] = $clientToken;
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
	public function getOnUnableToRedeployFailedInstance() {
		return $this->onUnableToRedeployFailedInstance;
	}

	/**
	 * @param $onUnableToRedeployFailedInstance
	 */
	public function setOnUnableToRedeployFailedInstance($onUnableToRedeployFailedInstance) {
		$this->onUnableToRedeployFailedInstance                    = $onUnableToRedeployFailedInstance;
		$this->apiParameters['OnUnableToRedeployFailedInstance'] = $onUnableToRedeployFailedInstance;
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