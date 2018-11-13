<?php

namespace AlibabaCloud\Ecs;

class CreateNetworkInterfaceRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'CreateNetworkInterface', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $clientToken;

	/**
	 * @var
	 */
	private $securityGroupId;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $resourceGroupId;

	/**
	 * @var
	 */
	private $Tags;

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
	private $vSwitchId;

	/**
	 * @var
	 */
	private $primaryIpAddress;

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
	public function getSecurityGroupId() {
		return $this->securityGroupId;
	}

	/**
	 * @param $securityGroupId
	 */
	public function setSecurityGroupId($securityGroupId) {
		$this->securityGroupId                    = $securityGroupId;
		$this->apiParameters['SecurityGroupId'] = $securityGroupId;
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
	public function getResourceGroupId() {
		return $this->resourceGroupId;
	}

	/**
	 * @param $resourceGroupId
	 */
	public function setResourceGroupId($resourceGroupId) {
		$this->resourceGroupId                    = $resourceGroupId;
		$this->apiParameters['ResourceGroupId'] = $resourceGroupId;
	}

	/**
	 * @return mixed
	 */
	public function getTags() {
		return $this->Tags;
	}

	/**
	 * @param $Tags
	 */
	public function setTags($Tags) {
		$this->Tags = $Tags;
		for ($i = 0; $i < count($Tags); $i++) {
			$this->apiParameters['Tag.' . ($i + 1) . '.Key']   = $Tags[$i]['Key'];
			$this->apiParameters['Tag.' . ($i + 1) . '.Value'] = $Tags[$i]['Value'];
		}
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
	public function getVSwitchId() {
		return $this->vSwitchId;
	}

	/**
	 * @param $vSwitchId
	 */
	public function setVSwitchId($vSwitchId) {
		$this->vSwitchId                    = $vSwitchId;
		$this->apiParameters['VSwitchId'] = $vSwitchId;
	}

	/**
	 * @return mixed
	 */
	public function getPrimaryIpAddress() {
		return $this->primaryIpAddress;
	}

	/**
	 * @param $primaryIpAddress
	 */
	public function setPrimaryIpAddress($primaryIpAddress) {
		$this->primaryIpAddress                    = $primaryIpAddress;
		$this->apiParameters['PrimaryIpAddress'] = $primaryIpAddress;
	}

}