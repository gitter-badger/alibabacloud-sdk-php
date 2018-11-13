<?php

namespace AlibabaCloud\Ecs;

class DescribeSecurityGroupAttributeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeSecurityGroupAttribute', 'ecs', 'openAPI');
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
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $securityGroupId;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $direction;

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
	public function getDirection() {
		return $this->direction;
	}

	/**
	 * @param $direction
	 */
	public function setDirection($direction) {
		$this->direction                    = $direction;
		$this->apiParameters['Direction'] = $direction;
	}

}