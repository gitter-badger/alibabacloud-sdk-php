<?php

namespace AlibabaCloud\Ecs;

class ModifyInstanceChargeTypeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyInstanceChargeType', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $period;

	/**
	 * @var
	 */
	private $dryRun;

	/**
	 * @var
	 */
	private $autoPay;

	/**
	 * @var
	 */
	private $includeDataDisks;

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
	private $periodUnit;

	/**
	 * @var
	 */
	private $instanceIds;

	/**
	 * @var
	 */
	private $instanceChargeType;

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
	public function getPeriod() {
		return $this->period;
	}

	/**
	 * @param $period
	 */
	public function setPeriod($period) {
		$this->period                    = $period;
		$this->apiParameters['Period'] = $period;
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
	public function getIncludeDataDisks() {
		return $this->includeDataDisks;
	}

	/**
	 * @param $includeDataDisks
	 */
	public function setIncludeDataDisks($includeDataDisks) {
		$this->includeDataDisks                    = $includeDataDisks;
		$this->apiParameters['IncludeDataDisks'] = $includeDataDisks;
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
	public function getPeriodUnit() {
		return $this->periodUnit;
	}

	/**
	 * @param $periodUnit
	 */
	public function setPeriodUnit($periodUnit) {
		$this->periodUnit                    = $periodUnit;
		$this->apiParameters['PeriodUnit'] = $periodUnit;
	}

	/**
	 * @return mixed
	 */
	public function getInstanceIds() {
		return $this->instanceIds;
	}

	/**
	 * @param $instanceIds
	 */
	public function setInstanceIds($instanceIds) {
		$this->instanceIds                    = $instanceIds;
		$this->apiParameters['InstanceIds'] = $instanceIds;
	}

	/**
	 * @return mixed
	 */
	public function getInstanceChargeType() {
		return $this->instanceChargeType;
	}

	/**
	 * @param $instanceChargeType
	 */
	public function setInstanceChargeType($instanceChargeType) {
		$this->instanceChargeType                    = $instanceChargeType;
		$this->apiParameters['InstanceChargeType'] = $instanceChargeType;
	}

}