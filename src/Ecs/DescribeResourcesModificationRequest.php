<?php

namespace AlibabaCloud\Ecs;

class DescribeResourcesModificationRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeResourcesModification', 'ecs', 'openAPI');
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
	private $cores;

	/**
	 * @var
	 */
	private $migrateAcrossZone;

	/**
	 * @var
	 */
	private $instanceType;

	/**
	 * @var
	 */
	private $resourceId;

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
	private $operationType;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $destinationResource;

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

	/**
	 * @return mixed
	 */
	public function getResourceId() {
		return $this->resourceId;
	}

	/**
	 * @param $resourceId
	 */
	public function setResourceId($resourceId) {
		$this->resourceId                    = $resourceId;
		$this->apiParameters['ResourceId'] = $resourceId;
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
	public function getOperationType() {
		return $this->operationType;
	}

	/**
	 * @param $operationType
	 */
	public function setOperationType($operationType) {
		$this->operationType                    = $operationType;
		$this->apiParameters['OperationType'] = $operationType;
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

}