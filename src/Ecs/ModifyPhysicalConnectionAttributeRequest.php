<?php

namespace AlibabaCloud\Ecs;

class ModifyPhysicalConnectionAttributeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyPhysicalConnectionAttribute', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $redundantPhysicalConnectionId;

	/**
	 * @var
	 */
	private $peerLocation;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $portType;

	/**
	 * @var
	 */
	private $circuitCode;

	/**
	 * @var
	 */
	private $bandwidth;

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
	private $lineOperator;

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
	private $userCidr;

	/**
	 * @return mixed
	 */
	public function getRedundantPhysicalConnectionId() {
		return $this->redundantPhysicalConnectionId;
	}

	/**
	 * @param $redundantPhysicalConnectionId
	 */
	public function setRedundantPhysicalConnectionId($redundantPhysicalConnectionId) {
		$this->redundantPhysicalConnectionId                    = $redundantPhysicalConnectionId;
		$this->apiParameters['RedundantPhysicalConnectionId'] = $redundantPhysicalConnectionId;
	}

	/**
	 * @return mixed
	 */
	public function getPeerLocation() {
		return $this->peerLocation;
	}

	/**
	 * @param $peerLocation
	 */
	public function setPeerLocation($peerLocation) {
		$this->peerLocation                    = $peerLocation;
		$this->apiParameters['PeerLocation'] = $peerLocation;
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
	public function getPortType() {
		return $this->portType;
	}

	/**
	 * @param $portType
	 */
	public function setPortType($portType) {
		$this->portType                    = $portType;
		$this->apiParameters['PortType'] = $portType;
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
	public function getbandwidth() {
		return $this->bandwidth;
	}

	/**
	 * @param $bandwidth
	 */
	public function setbandwidth($bandwidth) {
		$this->bandwidth                    = $bandwidth;
		$this->apiParameters['bandwidth'] = $bandwidth;
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
	public function getLineOperator() {
		return $this->lineOperator;
	}

	/**
	 * @param $lineOperator
	 */
	public function setLineOperator($lineOperator) {
		$this->lineOperator                    = $lineOperator;
		$this->apiParameters['LineOperator'] = $lineOperator;
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

}