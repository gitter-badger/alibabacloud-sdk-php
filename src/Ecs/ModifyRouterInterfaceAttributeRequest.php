<?php

namespace AlibabaCloud\Ecs;

class ModifyRouterInterfaceAttributeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyRouterInterfaceAttribute', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $oppositeRouterId;

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
	private $description;

	/**
	 * @var
	 */
	private $healthCheckTargetIp;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $routerInterfaceId;

	/**
	 * @var
	 */
	private $oppositeInterfaceOwnerId;

	/**
	 * @var
	 */
	private $healthCheckSourceIp;

	/**
	 * @var
	 */
	private $name;

	/**
	 * @var
	 */
	private $oppositeRouterType;

	/**
	 * @var
	 */
	private $oppositeInterfaceId;

	/**
	 * @return mixed
	 */
	public function getOppositeRouterId() {
		return $this->oppositeRouterId;
	}

	/**
	 * @param $oppositeRouterId
	 */
	public function setOppositeRouterId($oppositeRouterId) {
		$this->oppositeRouterId                    = $oppositeRouterId;
		$this->apiParameters['OppositeRouterId'] = $oppositeRouterId;
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
	public function getHealthCheckTargetIp() {
		return $this->healthCheckTargetIp;
	}

	/**
	 * @param $healthCheckTargetIp
	 */
	public function setHealthCheckTargetIp($healthCheckTargetIp) {
		$this->healthCheckTargetIp                    = $healthCheckTargetIp;
		$this->apiParameters['HealthCheckTargetIp'] = $healthCheckTargetIp;
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
	public function getRouterInterfaceId() {
		return $this->routerInterfaceId;
	}

	/**
	 * @param $routerInterfaceId
	 */
	public function setRouterInterfaceId($routerInterfaceId) {
		$this->routerInterfaceId                    = $routerInterfaceId;
		$this->apiParameters['RouterInterfaceId'] = $routerInterfaceId;
	}

	/**
	 * @return mixed
	 */
	public function getOppositeInterfaceOwnerId() {
		return $this->oppositeInterfaceOwnerId;
	}

	/**
	 * @param $oppositeInterfaceOwnerId
	 */
	public function setOppositeInterfaceOwnerId($oppositeInterfaceOwnerId) {
		$this->oppositeInterfaceOwnerId                    = $oppositeInterfaceOwnerId;
		$this->apiParameters['OppositeInterfaceOwnerId'] = $oppositeInterfaceOwnerId;
	}

	/**
	 * @return mixed
	 */
	public function getHealthCheckSourceIp() {
		return $this->healthCheckSourceIp;
	}

	/**
	 * @param $healthCheckSourceIp
	 */
	public function setHealthCheckSourceIp($healthCheckSourceIp) {
		$this->healthCheckSourceIp                    = $healthCheckSourceIp;
		$this->apiParameters['HealthCheckSourceIp'] = $healthCheckSourceIp;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param $name
	 */
	public function setName($name) {
		$this->name                    = $name;
		$this->apiParameters['Name'] = $name;
	}

	/**
	 * @return mixed
	 */
	public function getOppositeRouterType() {
		return $this->oppositeRouterType;
	}

	/**
	 * @param $oppositeRouterType
	 */
	public function setOppositeRouterType($oppositeRouterType) {
		$this->oppositeRouterType                    = $oppositeRouterType;
		$this->apiParameters['OppositeRouterType'] = $oppositeRouterType;
	}

	/**
	 * @return mixed
	 */
	public function getOppositeInterfaceId() {
		return $this->oppositeInterfaceId;
	}

	/**
	 * @param $oppositeInterfaceId
	 */
	public function setOppositeInterfaceId($oppositeInterfaceId) {
		$this->oppositeInterfaceId                    = $oppositeInterfaceId;
		$this->apiParameters['OppositeInterfaceId'] = $oppositeInterfaceId;
	}

}