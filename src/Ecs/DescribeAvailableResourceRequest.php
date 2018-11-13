<?php

namespace AlibabaCloud\Ecs;

class DescribeAvailableResourceRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeAvailableResource', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $memory;

	/**
	 * @var
	 */
	private $ioOptimized;

	/**
	 * @var
	 */
	private $dataDiskCategory;

	/**
	 * @var
	 */
	private $cores;

	/**
	 * @var
	 */
	private $systemDiskCategory;

	/**
	 * @var
	 */
	private $instanceType;

	/**
	 * @var
	 */
	private $networkCategory;

	/**
	 * @var
	 */
	private $instanceChargeType;

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
	private $resourceType;

	/**
	 * @var
	 */
	private $spotStrategy;

	/**
	 * @var
	 */
	private $destinationResource;

	/**
	 * @var
	 */
	private $zoneId;

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
	public function getMemory() {
		return $this->memory;
	}

	/**
	 * @param $memory
	 */
	public function setMemory($memory) {
		$this->memory                    = $memory;
		$this->apiParameters['Memory'] = $memory;
	}

	/**
	 * @return mixed
	 */
	public function getIoOptimized() {
		return $this->ioOptimized;
	}

	/**
	 * @param $ioOptimized
	 */
	public function setIoOptimized($ioOptimized) {
		$this->ioOptimized                    = $ioOptimized;
		$this->apiParameters['IoOptimized'] = $ioOptimized;
	}

	/**
	 * @return mixed
	 */
	public function getDataDiskCategory() {
		return $this->dataDiskCategory;
	}

	/**
	 * @param $dataDiskCategory
	 */
	public function setDataDiskCategory($dataDiskCategory) {
		$this->dataDiskCategory                    = $dataDiskCategory;
		$this->apiParameters['DataDiskCategory'] = $dataDiskCategory;
	}

	/**
	 * @return mixed
	 */
	public function getCores() {
		return $this->cores;
	}

	/**
	 * @param $cores
	 */
	public function setCores($cores) {
		$this->cores                    = $cores;
		$this->apiParameters['Cores'] = $cores;
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
		$this->systemDiskCategory                    = $systemDiskCategory;
		$this->apiParameters['SystemDiskCategory'] = $systemDiskCategory;
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
	public function getNetworkCategory() {
		return $this->networkCategory;
	}

	/**
	 * @param $networkCategory
	 */
	public function setNetworkCategory($networkCategory) {
		$this->networkCategory                    = $networkCategory;
		$this->apiParameters['NetworkCategory'] = $networkCategory;
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
	public function getResourceType() {
		return $this->resourceType;
	}

	/**
	 * @param $resourceType
	 */
	public function setResourceType($resourceType) {
		$this->resourceType                    = $resourceType;
		$this->apiParameters['ResourceType'] = $resourceType;
	}

	/**
	 * @return mixed
	 */
	public function getSpotStrategy() {
		return $this->spotStrategy;
	}

	/**
	 * @param $spotStrategy
	 */
	public function setSpotStrategy($spotStrategy) {
		$this->spotStrategy                    = $spotStrategy;
		$this->apiParameters['SpotStrategy'] = $spotStrategy;
	}

	/**
	 * @return mixed
	 */
	public function getDestinationResource() {
		return $this->destinationResource;
	}

	/**
	 * @param $destinationResource
	 */
	public function setDestinationResource($destinationResource) {
		$this->destinationResource                    = $destinationResource;
		$this->apiParameters['DestinationResource'] = $destinationResource;
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

}