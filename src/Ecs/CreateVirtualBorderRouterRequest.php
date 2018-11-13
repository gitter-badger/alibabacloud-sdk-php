<?php

namespace AlibabaCloud\Ecs;

class CreateVirtualBorderRouterRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'CreateVirtualBorderRouter', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $circuitCode;

	/**
	 * @var
	 */
	private $vlanId;

	/**
	 * @var
	 */
	private $clientToken;

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
	private $description;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $peerGatewayIp;

	/**
	 * @var
	 */
	private $peeringSubnetMask;

	/**
	 * @var
	 */
	private $physicalConnectionId;

	/**
	 * @var
	 */
	private $name;

	/**
	 * @var
	 */
	private $localGatewayIp;

	/**
	 * @var
	 */
	private $userCidr;

	/**
	 * @var
	 */
	private $vbrOwnerId;

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
	public function getCircuitCode() {
		return $this->circuitCode;
	}

	/**
	 * @param $circuitCode
	 */
	public function setCircuitCode($circuitCode) {
		$this->circuitCode                    = $circuitCode;
		$this->apiParameters['CircuitCode'] = $circuitCode;
	}

	/**
	 * @return mixed
	 */
	public function getVlanId() {
		return $this->vlanId;
	}

	/**
	 * @param $vlanId
	 */
	public function setVlanId($vlanId) {
		$this->vlanId                    = $vlanId;
		$this->apiParameters['VlanId'] = $vlanId;
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
	public function getPeerGatewayIp() {
		return $this->peerGatewayIp;
	}

	/**
	 * @param $peerGatewayIp
	 */
	public function setPeerGatewayIp($peerGatewayIp) {
		$this->peerGatewayIp                    = $peerGatewayIp;
		$this->apiParameters['PeerGatewayIp'] = $peerGatewayIp;
	}

	/**
	 * @return mixed
	 */
	public function getPeeringSubnetMask() {
		return $this->peeringSubnetMask;
	}

	/**
	 * @param $peeringSubnetMask
	 */
	public function setPeeringSubnetMask($peeringSubnetMask) {
		$this->peeringSubnetMask                    = $peeringSubnetMask;
		$this->apiParameters['PeeringSubnetMask'] = $peeringSubnetMask;
	}

	/**
	 * @return mixed
	 */
	public function getPhysicalConnectionId() {
		return $this->physicalConnectionId;
	}

	/**
	 * @param $physicalConnectionId
	 */
	public function setPhysicalConnectionId($physicalConnectionId) {
		$this->physicalConnectionId                    = $physicalConnectionId;
		$this->apiParameters['PhysicalConnectionId'] = $physicalConnectionId;
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
	public function getLocalGatewayIp() {
		return $this->localGatewayIp;
	}

	/**
	 * @param $localGatewayIp
	 */
	public function setLocalGatewayIp($localGatewayIp) {
		$this->localGatewayIp                    = $localGatewayIp;
		$this->apiParameters['LocalGatewayIp'] = $localGatewayIp;
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
	public function getVbrOwnerId() {
		return $this->vbrOwnerId;
	}

	/**
	 * @param $vbrOwnerId
	 */
	public function setVbrOwnerId($vbrOwnerId) {
		$this->vbrOwnerId                    = $vbrOwnerId;
		$this->apiParameters['VbrOwnerId'] = $vbrOwnerId;
	}

}