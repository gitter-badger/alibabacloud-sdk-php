<?php

namespace AlibabaCloud\Ecs;

class CreateRouterInterfaceRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'CreateRouterInterface', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $accessPointId;

	/**
	 * @var
	 */
	private $oppositeRouterId;

	/**
	 * @var
	 */
	private $oppositeAccessPointId;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $role;

	/**
	 * @var
	 */
	private $clientToken;

	/**
	 * @var
	 */
	private $healthCheckTargetIp;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $spec;

	/**
	 * @var
	 */
	private $userCidr;

	/**
	 * @var
	 */
	private $oppositeInterfaceId;

	/**
	 * @var
	 */
	private $instanceChargeType;

	/**
	 * @var
	 */
	private $period;

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
	private $oppositeRegionId;

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
	private $oppositeInterfaceOwnerId;

	/**
	 * @var
	 */
	private $routerType;

	/**
	 * @var
	 */
	private $healthCheckSourceIp;

	/**
	 * @var
	 */
	private $routerId;

	/**
	 * @var
	 */
	private $oppositeRouterType;

	/**
	 * @var
	 */
	private $name;

	/**
	 * @var
	 */
	private $pricingCycle;

	/**
	 * @return mixed
	 */
	public function getAccessPointId() {
		return $this->accessPointId;
	}

	/**
	 * @param $accessPointId
	 */
	public function setAccessPointId($accessPointId) {
		$this->accessPointId                    = $accessPointId;
		$this->apiParameters['AccessPointId'] = $accessPointId;
	}

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
	public function getOppositeAccessPointId() {
		return $this->oppositeAccessPointId;
	}

	/**
	 * @param $oppositeAccessPointId
	 */
	public function setOppositeAccessPointId($oppositeAccessPointId) {
		$this->oppositeAccessPointId                    = $oppositeAccessPointId;
		$this->apiParameters['OppositeAccessPointId'] = $oppositeAccessPointId;
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
	public function getRole() {
		return $this->role;
	}

	/**
	 * @param $role
	 */
	public function setRole($role) {
		$this->role                    = $role;
		$this->apiParameters['Role'] = $role;
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
	public function getSpec() {
		return $this->spec;
	}

	/**
	 * @param $spec
	 */
	public function setSpec($spec) {
		$this->spec                    = $spec;
		$this->apiParameters['Spec'] = $spec;
	}

	/**
	 * @return mixed
	 */
	public function getUserCidr() {
		return $this->userCidr;
	}

	/**
	 * @param $userCidr
	 */
	public function setUserCidr($userCidr) {
		$this->userCidr                    = $userCidr;
		$this->apiParameters['UserCidr'] = $userCidr;
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
	public function getOppositeRegionId() {
		return $this->oppositeRegionId;
	}

	/**
	 * @param $oppositeRegionId
	 */
	public function setOppositeRegionId($oppositeRegionId) {
		$this->oppositeRegionId                    = $oppositeRegionId;
		$this->apiParameters['OppositeRegionId'] = $oppositeRegionId;
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
	public function getRouterType() {
		return $this->routerType;
	}

	/**
	 * @param $routerType
	 */
	public function setRouterType($routerType) {
		$this->routerType                    = $routerType;
		$this->apiParameters['RouterType'] = $routerType;
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
	public function getRouterId() {
		return $this->routerId;
	}

	/**
	 * @param $routerId
	 */
	public function setRouterId($routerId) {
		$this->routerId                    = $routerId;
		$this->apiParameters['RouterId'] = $routerId;
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
	public function getPricingCycle() {
		return $this->pricingCycle;
	}

	/**
	 * @param $pricingCycle
	 */
	public function setPricingCycle($pricingCycle) {
		$this->pricingCycle                    = $pricingCycle;
		$this->apiParameters['PricingCycle'] = $pricingCycle;
	}

}