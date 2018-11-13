<?php

namespace AlibabaCloud\Ecs;

class DescribeDedicatedHostTypesRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeDedicatedHostTypes', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $supportedInstanceTypeFamily;

	/**
	 * @var
	 */
	private $dedicatedHostType;

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
	public function getSupportedInstanceTypeFamily() {
		return $this->supportedInstanceTypeFamily;
	}

	/**
	 * @param $supportedInstanceTypeFamily
	 */
	public function setSupportedInstanceTypeFamily($supportedInstanceTypeFamily) {
		$this->supportedInstanceTypeFamily                    = $supportedInstanceTypeFamily;
		$this->apiParameters['SupportedInstanceTypeFamily'] = $supportedInstanceTypeFamily;
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

}