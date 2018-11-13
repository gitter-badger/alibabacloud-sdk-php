<?php

namespace AlibabaCloud\Ecs;

class ReInitDiskRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ReInitDisk', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $password;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $autoStartInstance;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $diskId;

	/**
	 * @var
	 */
	private $securityEnhancementStrategy;

	/**
	 * @var
	 */
	private $keyPairName;

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
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @param $password
	 */
	public function setPassword($password) {
		$this->password                    = $password;
		$this->apiParameters['Password'] = $password;
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
	public function getAutoStartInstance() {
		return $this->autoStartInstance;
	}

	/**
	 * @param $autoStartInstance
	 */
	public function setAutoStartInstance($autoStartInstance) {
		$this->autoStartInstance                    = $autoStartInstance;
		$this->apiParameters['AutoStartInstance'] = $autoStartInstance;
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
	public function getDiskId() {
		return $this->diskId;
	}

	/**
	 * @param $diskId
	 */
	public function setDiskId($diskId) {
		$this->diskId                    = $diskId;
		$this->apiParameters['DiskId'] = $diskId;
	}

	/**
	 * @return mixed
	 */
	public function getSecurityEnhancementStrategy() {
		return $this->securityEnhancementStrategy;
	}

	/**
	 * @param $securityEnhancementStrategy
	 */
	public function setSecurityEnhancementStrategy($securityEnhancementStrategy) {
		$this->securityEnhancementStrategy                    = $securityEnhancementStrategy;
		$this->apiParameters['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;
	}

	/**
	 * @return mixed
	 */
	public function getKeyPairName() {
		return $this->keyPairName;
	}

	/**
	 * @param $keyPairName
	 */
	public function setKeyPairName($keyPairName) {
		$this->keyPairName                    = $keyPairName;
		$this->apiParameters['KeyPairName'] = $keyPairName;
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