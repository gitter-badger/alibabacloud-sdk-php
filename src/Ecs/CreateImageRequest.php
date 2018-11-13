<?php

namespace AlibabaCloud\Ecs;

class CreateImageRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'CreateImage', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $DiskDeviceMappings;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $snapshotId;

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
	private $description;

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
	private $resourceGroupId;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $imageName;

	/**
	 * @var
	 */
	private $imageVersion;

	/**
	 * @var
	 */
	private $Tags;

	/**
	 * @var
	 */
	private $architecture;

	/**
	 * @return mixed
	 */
	public function getDiskDeviceMappings() {
		return $this->DiskDeviceMappings;
	}

	/**
	 * @param $DiskDeviceMappings
	 */
	public function setDiskDeviceMappings($DiskDeviceMappings) {
		$this->DiskDeviceMappings = $DiskDeviceMappings;
		for ($i = 0; $i < count($DiskDeviceMappings); $i++) {
			$this->apiParameters['DiskDeviceMapping.' . ($i + 1) . '.SnapshotId'] = $DiskDeviceMappings[$i]['SnapshotId'];
			$this->apiParameters['DiskDeviceMapping.' . ($i + 1) . '.Size']       = $DiskDeviceMappings[$i]['Size'];
			$this->apiParameters['DiskDeviceMapping.' . ($i + 1) . '.DiskType']   = $DiskDeviceMappings[$i]['DiskType'];
			$this->apiParameters['DiskDeviceMapping.' . ($i + 1) . '.Device']     = $DiskDeviceMappings[$i]['Device'];
		}
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
	public function getSnapshotId() {
		return $this->snapshotId;
	}

	/**
	 * @param $snapshotId
	 */
	public function setSnapshotId($snapshotId) {
		$this->snapshotId                    = $snapshotId;
		$this->apiParameters['SnapshotId'] = $snapshotId;
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
	public function getImageName() {
		return $this->imageName;
	}

	/**
	 * @param $imageName
	 */
	public function setImageName($imageName) {
		$this->imageName                    = $imageName;
		$this->apiParameters['ImageName'] = $imageName;
	}

	/**
	 * @return mixed
	 */
	public function getImageVersion() {
		return $this->imageVersion;
	}

	/**
	 * @param $imageVersion
	 */
	public function setImageVersion($imageVersion) {
		$this->imageVersion                    = $imageVersion;
		$this->apiParameters['ImageVersion'] = $imageVersion;
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
			$this->apiParameters['Tag.' . ($i + 1) . '.Value'] = $Tags[$i]['Value'];
			$this->apiParameters['Tag.' . ($i + 1) . '.Key']   = $Tags[$i]['Key'];
		}
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