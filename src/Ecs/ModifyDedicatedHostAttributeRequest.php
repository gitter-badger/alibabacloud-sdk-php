<?php

namespace AlibabaCloud\Ecs;

class ModifyDedicatedHostAttributeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyDedicatedHostAttribute', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $actionOnMaintenance;

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
	private $dedicatedHostId;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $networkAttributesSlbUdpTimeout;

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
	public function getDedicatedHostId() {
		return $this->dedicatedHostId;
	}

	/**
	 * @param $dedicatedHostId
	 */
	public function setDedicatedHostId($dedicatedHostId) {
		$this->dedicatedHostId                    = $dedicatedHostId;
		$this->apiParameters['DedicatedHostId'] = $dedicatedHostId;
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