<?php

namespace AlibabaCloud\Ecs;

class ModifyPrepayInstanceSpecRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyPrepayInstanceSpec', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $autoPay;

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
	private $ownerId;

	/**
	 * @var
	 */
	private $operatorType;

	/**
	 * @var
	 */
	private $systemDiskCategory;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $migrateAcrossZone;

	/**
	 * @var
	 */
	private $instanceType;

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
	public function getAutoPay() {
		return $this->autoPay;
	}

	/**
	 * @param $autoPay
	 */
	public function setAutoPay($autoPay) {
		$this->autoPay                    = $autoPay;
		$this->apiParameters['AutoPay'] = $autoPay;
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
	public function getOperatorType() {
		return $this->operatorType;
	}

	/**
	 * @param $operatorType
	 */
	public function setOperatorType($operatorType) {
		$this->operatorType                    = $operatorType;
		$this->apiParameters['OperatorType'] = $operatorType;
	}

	/**
	 * @return mixed
	 */
	public function getSystemDiskCategory() {
		return $this->systemDiskCategory;
	}

	/**
	 * @param $systemDiskCategory
	 */
	public function setSystemDiskCategory($systemDiskCategory) {
		$this->systemDiskCategory                     = $systemDiskCategory;
		$this->apiParameters['SystemDisk.Category'] = $systemDiskCategory;
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
	public function getMigrateAcrossZone() {
		return $this->migrateAcrossZone;
	}

	/**
	 * @param $migrateAcrossZone
	 */
	public function setMigrateAcrossZone($migrateAcrossZone) {
		$this->migrateAcrossZone                    = $migrateAcrossZone;
		$this->apiParameters['MigrateAcrossZone'] = $migrateAcrossZone;
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

}