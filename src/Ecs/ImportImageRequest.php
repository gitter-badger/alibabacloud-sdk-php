<?php

namespace AlibabaCloud\Ecs;

class ImportImageRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ImportImage', 'ecs', 'openAPI');
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
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $imageName;

	/**
	 * @var
	 */
	private $roleName;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $oSType;

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
			$this->apiParameters['DiskDeviceMapping.' . ($i + 1) . '.OSSBucket']     = $DiskDeviceMappings[$i]['OSSBucket'];
			$this->apiParameters['DiskDeviceMapping.' . ($i + 1) . '.DiskImSize']    = $DiskDeviceMappings[$i]['DiskImSize'];
			$this->apiParameters['DiskDeviceMapping.' . ($i + 1) . '.Format']        = $DiskDeviceMappings[$i]['Format'];
			$this->apiParameters['DiskDeviceMapping.' . ($i + 1) . '.Device']        = $DiskDeviceMappings[$i]['Device'];
			$this->apiParameters['DiskDeviceMapping.' . ($i + 1) . '.OSSObject']     = $DiskDeviceMappings[$i]['OSSObject'];
			$this->apiParameters['DiskDeviceMapping.' . ($i + 1) . '.DiskImageSize'] = $DiskDeviceMappings[$i]['DiskImageSize'];
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
	public function getRoleName() {
		return $this->roleName;
	}

	/**
	 * @param $roleName
	 */
	public function setRoleName($roleName) {
		$this->roleName                    = $roleName;
		$this->apiParameters['RoleName'] = $roleName;
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
	public function getOSType() {
		return $this->oSType;
	}

	/**
	 * @param $oSType
	 */
	public function setOSType($oSType) {
		$this->oSType                    = $oSType;
		$this->apiParameters['OSType'] = $oSType;
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