<?php

namespace AlibabaCloud\Ecs;

class ModifyInstanceAttributeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyInstanceAttribute', 'ecs', 'openAPI');
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
	private $recyclable;

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
	private $creditSpecification;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $userData;

	/**
	 * @var
	 */
	private $password;

	/**
	 * @var
	 */
	private $hostName;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $instanceName;

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
	public function getRecyclable() {
		return $this->recyclable;
	}

	/**
	 * @param $recyclable
	 */
	public function setRecyclable($recyclable) {
		$this->recyclable                    = $recyclable;
		$this->apiParameters['Recyclable'] = $recyclable;
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
	public function getCreditSpecification() {
		return $this->creditSpecification;
	}

	/**
	 * @param $creditSpecification
	 */
	public function setCreditSpecification($creditSpecification) {
		$this->creditSpecification                    = $creditSpecification;
		$this->apiParameters['CreditSpecification'] = $creditSpecification;
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
	public function getUserData() {
		return $this->userData;
	}

	/**
	 * @param $userData
	 */
	public function setUserData($userData) {
		$this->userData                    = $userData;
		$this->apiParameters['UserData'] = $userData;
	}

	/**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @param $password
	 */
	public function setPassword($password) {
		$this->password                    = $password;
		$this->apiParameters['Password'] = $password;
	}

	/**
	 * @return mixed
	 */
	public function getHostName() {
		return $this->hostName;
	}

	/**
	 * @param $hostName
	 */
	public function setHostName($hostName) {
		$this->hostName                    = $hostName;
		$this->apiParameters['HostName'] = $hostName;
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
	public function getInstanceName() {
		return $this->instanceName;
	}

	/**
	 * @param $instanceName
	 */
	public function setInstanceName($instanceName) {
		$this->instanceName                    = $instanceName;
		$this->apiParameters['InstanceName'] = $instanceName;
	}

}