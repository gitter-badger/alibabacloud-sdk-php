<?php

namespace AlibabaCloud\Ecs;

class ReplaceSystemDiskRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ReplaceSystemDisk', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $imageId;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $clientToken;

	/**
	 * @var
	 */
	private $ownerAccount;

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
	 * @var
	 */
	private $platform;

	/**
	 * @var
	 */
	private $password;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $passwordInherit;

	/**
	 * @var
	 */
	private $systemDiskSize;

	/**
	 * @var
	 */
	private $diskId;

	/**
	 * @var
	 */
	private $useAdditionalService;

	/**
	 * @var
	 */
	private $architecture;

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
	public function getImageId() {
		return $this->imageId;
	}

	/**
	 * @param $imageId
	 */
	public function setImageId($imageId) {
		$this->imageId                    = $imageId;
		$this->apiParameters['ImageId'] = $imageId;
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

	/**
	 * @return mixed
	 */
	public function getPlatform() {
		return $this->platform;
	}

	/**
	 * @param $platform
	 */
	public function setPlatform($platform) {
		$this->platform                    = $platform;
		$this->apiParameters['Platform'] = $platform;
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
	public function getInstanceId() {
		return $this->instanceId;
	}

	/**
	 * @param $instanceId
	 */
	public function setInstanceId($instanceId) {
		$this->instanceId                    = $instanceId;
		$this->apiParameters['InstanceId'] = $instanceId;
	}

	/**
	 * @return mixed
	 */
	public function getPasswordInherit() {
		return $this->passwordInherit;
	}

	/**
	 * @param $passwordInherit
	 */
	public function setPasswordInherit($passwordInherit) {
		$this->passwordInherit                    = $passwordInherit;
		$this->apiParameters['PasswordInherit'] = $passwordInherit;
	}

	/**
	 * @return mixed
	 */
	public function getSystemDiskSize() {
		return $this->systemDiskSize;
	}

	/**
	 * @param $systemDiskSize
	 */
	public function setSystemDiskSize($systemDiskSize) {
		$this->systemDiskSize                     = $systemDiskSize;
		$this->apiParameters['SystemDisk.Size'] = $systemDiskSize;
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
	public function getUseAdditionalService() {
		return $this->useAdditionalService;
	}

	/**
	 * @param $useAdditionalService
	 */
	public function setUseAdditionalService($useAdditionalService) {
		$this->useAdditionalService                    = $useAdditionalService;
		$this->apiParameters['UseAdditionalService'] = $useAdditionalService;
	}

	/**
	 * @return mixed
	 */
	public function getArchitecture() {
		return $this->architecture;
	}

	/**
	 * @param $architecture
	 */
	public function setArchitecture($architecture) {
		$this->architecture                    = $architecture;
		$this->apiParameters['Architecture'] = $architecture;
	}

}