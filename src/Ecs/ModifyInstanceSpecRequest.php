<?php

namespace AlibabaCloud\Ecs;

class ModifyInstanceSpecRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyInstanceSpec', 'ecs', 'openAPI');
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
	private $allowMigrateAcrossZone;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $internetMaxBandwidthOut;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $temporaryInternetMaxBandwidthOut;

	/**
	 * @var
	 */
	private $systemDiskCategory;

	/**
	 * @var
	 */
	private $temporaryStartTime;

	/**
	 * @var
	 */
	private $async;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $instanceType;

	/**
	 * @var
	 */
	private $temporaryEndTime;

	/**
	 * @var
	 */
	private $internetMaxBandwidthIn;

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
	public function getAllowMigrateAcrossZone() {
		return $this->allowMigrateAcrossZone;
	}

	/**
	 * @param $allowMigrateAcrossZone
	 */
	public function setAllowMigrateAcrossZone($allowMigrateAcrossZone) {
		$this->allowMigrateAcrossZone                    = $allowMigrateAcrossZone;
		$this->apiParameters['AllowMigrateAcrossZone'] = $allowMigrateAcrossZone;
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
	public function getInternetMaxBandwidthOut() {
		return $this->internetMaxBandwidthOut;
	}

	/**
	 * @param $internetMaxBandwidthOut
	 */
	public function setInternetMaxBandwidthOut($internetMaxBandwidthOut) {
		$this->internetMaxBandwidthOut                    = $internetMaxBandwidthOut;
		$this->apiParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;
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
	public function getTemporaryInternetMaxBandwidthOut() {
		return $this->temporaryInternetMaxBandwidthOut;
	}

	/**
	 * @param $temporaryInternetMaxBandwidthOut
	 */
	public function setTemporaryInternetMaxBandwidthOut($temporaryInternetMaxBandwidthOut) {
		$this->temporaryInternetMaxBandwidthOut                     = $temporaryInternetMaxBandwidthOut;
		$this->apiParameters['Temporary.InternetMaxBandwidthOut'] = $temporaryInternetMaxBandwidthOut;
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
	public function getTemporaryStartTime() {
		return $this->temporaryStartTime;
	}

	/**
	 * @param $temporaryStartTime
	 */
	public function setTemporaryStartTime($temporaryStartTime) {
		$this->temporaryStartTime                     = $temporaryStartTime;
		$this->apiParameters['Temporary.StartTime'] = $temporaryStartTime;
	}

	/**
	 * @return mixed
	 */
	public function getAsync() {
		return $this->async;
	}

	/**
	 * @param $async
	 */
	public function setAsync($async) {
		$this->async                    = $async;
		$this->apiParameters['Async'] = $async;
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
	public function getTemporaryEndTime() {
		return $this->temporaryEndTime;
	}

	/**
	 * @param $temporaryEndTime
	 */
	public function setTemporaryEndTime($temporaryEndTime) {
		$this->temporaryEndTime                     = $temporaryEndTime;
		$this->apiParameters['Temporary.EndTime'] = $temporaryEndTime;
	}

	/**
	 * @return mixed
	 */
	public function getInternetMaxBandwidthIn() {
		return $this->internetMaxBandwidthIn;
	}

	/**
	 * @param $internetMaxBandwidthIn
	 */
	public function setInternetMaxBandwidthIn($internetMaxBandwidthIn) {
		$this->internetMaxBandwidthIn                    = $internetMaxBandwidthIn;
		$this->apiParameters['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;
	}

}