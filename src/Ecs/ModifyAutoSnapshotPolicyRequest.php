<?php

namespace AlibabaCloud\Ecs;

class ModifyAutoSnapshotPolicyRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyAutoSnapshotPolicy', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $dataDiskPolicyEnabled;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $dataDiskPolicyRetentionDays;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $systemDiskPolicyRetentionLastWeek;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $systemDiskPolicyTimePeriod;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $dataDiskPolicyRetentionLastWeek;

	/**
	 * @var
	 */
	private $systemDiskPolicyRetentionDays;

	/**
	 * @var
	 */
	private $dataDiskPolicyTimePeriod;

	/**
	 * @var
	 */
	private $systemDiskPolicyEnabled;

	/**
	 * @return mixed
	 */
	public function getDataDiskPolicyEnabled() {
		return $this->dataDiskPolicyEnabled;
	}

	/**
	 * @param $dataDiskPolicyEnabled
	 */
	public function setDataDiskPolicyEnabled($dataDiskPolicyEnabled) {
		$this->dataDiskPolicyEnabled                    = $dataDiskPolicyEnabled;
		$this->apiParameters['DataDiskPolicyEnabled'] = $dataDiskPolicyEnabled;
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
	public function getDataDiskPolicyRetentionDays() {
		return $this->dataDiskPolicyRetentionDays;
	}

	/**
	 * @param $dataDiskPolicyRetentionDays
	 */
	public function setDataDiskPolicyRetentionDays($dataDiskPolicyRetentionDays) {
		$this->dataDiskPolicyRetentionDays                    = $dataDiskPolicyRetentionDays;
		$this->apiParameters['DataDiskPolicyRetentionDays'] = $dataDiskPolicyRetentionDays;
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
	public function getSystemDiskPolicyRetentionLastWeek() {
		return $this->systemDiskPolicyRetentionLastWeek;
	}

	/**
	 * @param $systemDiskPolicyRetentionLastWeek
	 */
	public function setSystemDiskPolicyRetentionLastWeek($systemDiskPolicyRetentionLastWeek) {
		$this->systemDiskPolicyRetentionLastWeek                    = $systemDiskPolicyRetentionLastWeek;
		$this->apiParameters['SystemDiskPolicyRetentionLastWeek'] = $systemDiskPolicyRetentionLastWeek;
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
	public function getSystemDiskPolicyTimePeriod() {
		return $this->systemDiskPolicyTimePeriod;
	}

	/**
	 * @param $systemDiskPolicyTimePeriod
	 */
	public function setSystemDiskPolicyTimePeriod($systemDiskPolicyTimePeriod) {
		$this->systemDiskPolicyTimePeriod                    = $systemDiskPolicyTimePeriod;
		$this->apiParameters['SystemDiskPolicyTimePeriod'] = $systemDiskPolicyTimePeriod;
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
	public function getDataDiskPolicyRetentionLastWeek() {
		return $this->dataDiskPolicyRetentionLastWeek;
	}

	/**
	 * @param $dataDiskPolicyRetentionLastWeek
	 */
	public function setDataDiskPolicyRetentionLastWeek($dataDiskPolicyRetentionLastWeek) {
		$this->dataDiskPolicyRetentionLastWeek                    = $dataDiskPolicyRetentionLastWeek;
		$this->apiParameters['DataDiskPolicyRetentionLastWeek'] = $dataDiskPolicyRetentionLastWeek;
	}

	/**
	 * @return mixed
	 */
	public function getSystemDiskPolicyRetentionDays() {
		return $this->systemDiskPolicyRetentionDays;
	}

	/**
	 * @param $systemDiskPolicyRetentionDays
	 */
	public function setSystemDiskPolicyRetentionDays($systemDiskPolicyRetentionDays) {
		$this->systemDiskPolicyRetentionDays                    = $systemDiskPolicyRetentionDays;
		$this->apiParameters['SystemDiskPolicyRetentionDays'] = $systemDiskPolicyRetentionDays;
	}

	/**
	 * @return mixed
	 */
	public function getDataDiskPolicyTimePeriod() {
		return $this->dataDiskPolicyTimePeriod;
	}

	/**
	 * @param $dataDiskPolicyTimePeriod
	 */
	public function setDataDiskPolicyTimePeriod($dataDiskPolicyTimePeriod) {
		$this->dataDiskPolicyTimePeriod                    = $dataDiskPolicyTimePeriod;
		$this->apiParameters['DataDiskPolicyTimePeriod'] = $dataDiskPolicyTimePeriod;
	}

	/**
	 * @return mixed
	 */
	public function getSystemDiskPolicyEnabled() {
		return $this->systemDiskPolicyEnabled;
	}

	/**
	 * @param $systemDiskPolicyEnabled
	 */
	public function setSystemDiskPolicyEnabled($systemDiskPolicyEnabled) {
		$this->systemDiskPolicyEnabled                    = $systemDiskPolicyEnabled;
		$this->apiParameters['SystemDiskPolicyEnabled'] = $systemDiskPolicyEnabled;
	}

}