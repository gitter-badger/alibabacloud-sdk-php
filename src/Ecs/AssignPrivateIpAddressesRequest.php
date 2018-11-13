<?php

namespace AlibabaCloud\Ecs;

use AlibabaCloud\Core\RpcRequest;

/**
 * Class AssignPrivateIpAddressesRequest
 *
 * @package AlibabaCloud\Ecs
 */
class AssignPrivateIpAddressesRequest extends RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'AssignPrivateIpAddresses', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $secondaryPrivateIpAddressCount;

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
	private $PrivateIpAddress;

	/**
	 * @var
	 */
	private $networkInterfaceId;

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
	public function getSecondaryPrivateIpAddressCount() {
		return $this->secondaryPrivateIpAddressCount;
	}

	/**
	 * @param $secondaryPrivateIpAddressCount
	 */
	public function setSecondaryPrivateIpAddressCount($secondaryPrivateIpAddressCount) {
		$this->secondaryPrivateIpAddressCount                    = $secondaryPrivateIpAddressCount;
		$this->apiParameters['SecondaryPrivateIpAddressCount'] = $secondaryPrivateIpAddressCount;
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
	public function getPrivateIpAddress() {
		return $this->PrivateIpAddress;
	}

	/**
	 * @param $PrivateIpAddress
	 */
	public function setPrivateIpAddress($PrivateIpAddress) {
		$this->PrivateIpAddress = $PrivateIpAddress;
		for ($i = 0; $i < count($PrivateIpAddress); $i++) {
			$this->apiParameters['PrivateIpAddress.' . ($i + 1)] = $PrivateIpAddress[$i];
		}
	}

	/**
	 * @return mixed
	 */
	public function getNetworkInterfaceId() {
		return $this->networkInterfaceId;
	}

	/**
	 * @param $networkInterfaceId
	 */
	public function setNetworkInterfaceId($networkInterfaceId) {
		$this->networkInterfaceId                    = $networkInterfaceId;
		$this->apiParameters['NetworkInterfaceId'] = $networkInterfaceId;
	}

}