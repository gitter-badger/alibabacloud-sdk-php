<?php

namespace AlibabaCloud\Ecs;

class DescribeRenewalPriceRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeRenewalPrice', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $resourceId;

	/**
	 * @var
	 */
	private $period;

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
	private $priceUnit;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $resourceType;

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
	public function getPriceUnit() {
		return $this->priceUnit;
	}

	/**
	 * @param $priceUnit
	 */
	public function setPriceUnit($priceUnit) {
		$this->priceUnit                    = $priceUnit;
		$this->apiParameters['PriceUnit'] = $priceUnit;
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

}