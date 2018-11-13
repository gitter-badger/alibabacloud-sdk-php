<?php

namespace AlibabaCloud\Ecs;

class DescribeZonesRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeZones', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $spotStrategy;

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
	private $ownerAccount;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $instanceChargeType;

	/**
	 * @var
	 */
	private $verbose;

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
	public function getVerbose() {
		return $this->verbose;
	}

	/**
	 * @param $verbose
	 */
	public function setVerbose($verbose) {
		$this->verbose                    = $verbose;
		$this->apiParameters['Verbose'] = $verbose;
	}

}