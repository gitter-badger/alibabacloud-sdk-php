<?php

namespace AlibabaCloud\Ecs;

class ModifyNetworkInterfaceAttributeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyNetworkInterfaceAttribute', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $SecurityGroupIds;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $networkInterfaceName;

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
	public function getSecurityGroupIds() {
		return $this->SecurityGroupIds;
	}

	/**
	 * @param $SecurityGroupIds
	 */
	public function setSecurityGroupIds($SecurityGroupIds) {
		$this->SecurityGroupIds = $SecurityGroupIds;
		for ($i = 0; $i < count($SecurityGroupIds); $i++) {
			$this->apiParameters['SecurityGroupId.' . ($i + 1)] = $SecurityGroupIds[$i];
		}
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
	public function getNetworkInterfaceName() {
		return $this->networkInterfaceName;
	}

	/**
	 * @param $networkInterfaceName
	 */
	public function setNetworkInterfaceName($networkInterfaceName) {
		$this->networkInterfaceName                    = $networkInterfaceName;
		$this->apiParameters['NetworkInterfaceName'] = $networkInterfaceName;
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