<?php

namespace AlibabaCloud\Ecs;

class AllocateDedicatedHostsRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'AllocateDedicatedHosts', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $clientToken;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $resourceGroupId;

	/**
	 * @var
	 */
	private $actionOnMaintenance;

	/**
	 * @var
	 */
	private $Tags;

	/**
	 * @var
	 */
	private $dedicatedHostType;

	/**
	 * @var
	 */
	private $autoRenewPeriod;

	/**
	 * @var
	 */
	private $period;

	/**
	 * @var
	 */
	private $quantity;

	/**
	 * @var
	 */
	private $dedicatedHostName;

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
	private $autoReleaseTime;

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
	private $autoRenew;

	/**
	 * @var
	 */
	private $networkAttributesSlbUdpTimeout;

	/**
	 * @var
	 */
	private $zoneId;

	/**
	 * @var
	 */
	private $chargeType;

	/**
	 * @var
	 */
	private $networkAttributesUdpTimeout;

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
	public function getActionOnMaintenance() {
		return $this->actionOnMaintenance;
	}

	/**
	 * @param $actionOnMaintenance
	 */
	public function setActionOnMaintenance($actionOnMaintenance) {
		$this->actionOnMaintenance                    = $actionOnMaintenance;
		$this->apiParameters['ActionOnMaintenance'] = $actionOnMaintenance;
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
			$this->apiParameters['Tag.' . ($i + 1) . '.Key']   = $Tags[$i]['Key'];
			$this->apiParameters['Tag.' . ($i + 1) . '.Value'] = $Tags[$i]['Value'];
		}
	}

	/**
	 * @return mixed
	 */
	public function getDedicatedHostType() {
		return $this->dedicatedHostType;
	}

	/**
	 * @param $dedicatedHostType
	 */
	public function setDedicatedHostType($dedicatedHostType) {
		$this->dedicatedHostType                    = $dedicatedHostType;
		$this->apiParameters['DedicatedHostType'] = $dedicatedHostType;
	}

	/**
	 * @return mixed
	 */
	public function getAutoRenewPeriod() {
		return $this->autoRenewPeriod;
	}

	/**
	 * @param $autoRenewPeriod
	 */
	public function setAutoRenewPeriod($autoRenewPeriod) {
		$this->autoRenewPeriod                    = $autoRenewPeriod;
		$this->apiParameters['AutoRenewPeriod'] = $autoRenewPeriod;
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
	public function getQuantity() {
		return $this->quantity;
	}

	/**
	 * @param $quantity
	 */
	public function setQuantity($quantity) {
		$this->quantity                    = $quantity;
		$this->apiParameters['Quantity'] = $quantity;
	}

	/**
	 * @return mixed
	 */
	public function getDedicatedHostName() {
		return $this->dedicatedHostName;
	}

	/**
	 * @param $dedicatedHostName
	 */
	public function setDedicatedHostName($dedicatedHostName) {
		$this->dedicatedHostName                    = $dedicatedHostName;
		$this->apiParameters['DedicatedHostName'] = $dedicatedHostName;
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
	public function getAutoReleaseTime() {
		return $this->autoReleaseTime;
	}

	/**
	 * @param $autoReleaseTime
	 */
	public function setAutoReleaseTime($autoReleaseTime) {
		$this->autoReleaseTime                    = $autoReleaseTime;
		$this->apiParameters['AutoReleaseTime'] = $autoReleaseTime;
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
	public function getAutoRenew() {
		return $this->autoRenew;
	}

	/**
	 * @param $autoRenew
	 */
	public function setAutoRenew($autoRenew) {
		$this->autoRenew                    = $autoRenew;
		$this->apiParameters['AutoRenew'] = $autoRenew;
	}

	/**
	 * @return mixed
	 */
	public function getNetworkAttributesSlbUdpTimeout() {
		return $this->networkAttributesSlbUdpTimeout;
	}

	/**
	 * @param $networkAttributesSlbUdpTimeout
	 */
	public function setNetworkAttributesSlbUdpTimeout($networkAttributesSlbUdpTimeout) {
		$this->networkAttributesSlbUdpTimeout                     = $networkAttributesSlbUdpTimeout;
		$this->apiParameters['NetworkAttributes.SlbUdpTimeout'] = $networkAttributesSlbUdpTimeout;
	}

	/**
	 * @return mixed
	 */
	public function getZoneId() {
		return $this->zoneId;
	}

	/**
	 * @param $zoneId
	 */
	public function setZoneId($zoneId) {
		$this->zoneId                    = $zoneId;
		$this->apiParameters['ZoneId'] = $zoneId;
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
	public function getNetworkAttributesUdpTimeout() {
		return $this->networkAttributesUdpTimeout;
	}

	/**
	 * @param $networkAttributesUdpTimeout
	 */
	public function setNetworkAttributesUdpTimeout($networkAttributesUdpTimeout) {
		$this->networkAttributesUdpTimeout                     = $networkAttributesUdpTimeout;
		$this->apiParameters['NetworkAttributes.UdpTimeout'] = $networkAttributesUdpTimeout;
	}

}