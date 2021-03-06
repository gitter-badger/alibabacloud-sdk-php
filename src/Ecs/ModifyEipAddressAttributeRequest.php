<?php

namespace AlibabaCloud\Ecs;

class ModifyEipAddressAttributeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyEipAddressAttribute', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

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
	private $bandwidth;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $allocationId;

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
	public function getBandwidth() {
		return $this->bandwidth;
	}

	/**
	 * @param $bandwidth
	 */
	public function setBandwidth($bandwidth) {
		$this->bandwidth                    = $bandwidth;
		$this->apiParameters['Bandwidth'] = $bandwidth;
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
	public function getAllocationId() {
		return $this->allocationId;
	}

	/**
	 * @param $allocationId
	 */
	public function setAllocationId($allocationId) {
		$this->allocationId                    = $allocationId;
		$this->apiParameters['AllocationId'] = $allocationId;
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