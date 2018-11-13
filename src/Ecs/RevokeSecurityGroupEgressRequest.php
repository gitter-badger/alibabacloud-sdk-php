<?php

namespace AlibabaCloud\Ecs;

class RevokeSecurityGroupEgressRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'RevokeSecurityGroupEgress', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $nicType;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $sourcePortRange;

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
	private $policy;

	/**
	 * @var
	 */
	private $portRange;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $ipProtocol;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $sourceCidrIp;

	/**
	 * @var
	 */
	private $destGroupId;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $destGroupOwnerAccount;

	/**
	 * @var
	 */
	private $priority;

	/**
	 * @var
	 */
	private $destCidrIp;

	/**
	 * @var
	 */
	private $destGroupOwnerId;

	/**
	 * @return mixed
	 */
	public function getNicType() {
		return $this->nicType;
	}

	/**
	 * @param $nicType
	 */
	public function setNicType($nicType) {
		$this->nicType                    = $nicType;
		$this->apiParameters['NicType'] = $nicType;
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
	public function getSourcePortRange() {
		return $this->sourcePortRange;
	}

	/**
	 * @param $sourcePortRange
	 */
	public function setSourcePortRange($sourcePortRange) {
		$this->sourcePortRange                    = $sourcePortRange;
		$this->apiParameters['SourcePortRange'] = $sourcePortRange;
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
	public function getPolicy() {
		return $this->policy;
	}

	/**
	 * @param $policy
	 */
	public function setPolicy($policy) {
		$this->policy                    = $policy;
		$this->apiParameters['Policy'] = $policy;
	}

	/**
	 * @return mixed
	 */
	public function getPortRange() {
		return $this->portRange;
	}

	/**
	 * @param $portRange
	 */
	public function setPortRange($portRange) {
		$this->portRange                    = $portRange;
		$this->apiParameters['PortRange'] = $portRange;
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
	public function getIpProtocol() {
		return $this->ipProtocol;
	}

	/**
	 * @param $ipProtocol
	 */
	public function setIpProtocol($ipProtocol) {
		$this->ipProtocol                    = $ipProtocol;
		$this->apiParameters['IpProtocol'] = $ipProtocol;
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
	public function getSourceCidrIp() {
		return $this->sourceCidrIp;
	}

	/**
	 * @param $sourceCidrIp
	 */
	public function setSourceCidrIp($sourceCidrIp) {
		$this->sourceCidrIp                    = $sourceCidrIp;
		$this->apiParameters['SourceCidrIp'] = $sourceCidrIp;
	}

	/**
	 * @return mixed
	 */
	public function getDestGroupId() {
		return $this->destGroupId;
	}

	/**
	 * @param $destGroupId
	 */
	public function setDestGroupId($destGroupId) {
		$this->destGroupId                    = $destGroupId;
		$this->apiParameters['DestGroupId'] = $destGroupId;
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
	public function getDestGroupOwnerAccount() {
		return $this->destGroupOwnerAccount;
	}

	/**
	 * @param $destGroupOwnerAccount
	 */
	public function setDestGroupOwnerAccount($destGroupOwnerAccount) {
		$this->destGroupOwnerAccount                    = $destGroupOwnerAccount;
		$this->apiParameters['DestGroupOwnerAccount'] = $destGroupOwnerAccount;
	}

	/**
	 * @return mixed
	 */
	public function getPriority() {
		return $this->priority;
	}

	/**
	 * @param $priority
	 */
	public function setPriority($priority) {
		$this->priority                    = $priority;
		$this->apiParameters['Priority'] = $priority;
	}

	/**
	 * @return mixed
	 */
	public function getDestCidrIp() {
		return $this->destCidrIp;
	}

	/**
	 * @param $destCidrIp
	 */
	public function setDestCidrIp($destCidrIp) {
		$this->destCidrIp                    = $destCidrIp;
		$this->apiParameters['DestCidrIp'] = $destCidrIp;
	}

	/**
	 * @return mixed
	 */
	public function getDestGroupOwnerId() {
		return $this->destGroupOwnerId;
	}

	/**
	 * @param $destGroupOwnerId
	 */
	public function setDestGroupOwnerId($destGroupOwnerId) {
		$this->destGroupOwnerId                    = $destGroupOwnerId;
		$this->apiParameters['DestGroupOwnerId'] = $destGroupOwnerId;
	}

}