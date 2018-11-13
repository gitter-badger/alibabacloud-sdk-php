<?php

namespace AlibabaCloud\Ecs;

use AlibabaCloud\Core\RpcRequest;

class CreateLaunchTemplateVersionRequest extends RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'CreateLaunchTemplateVersion', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $launchTemplateName;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $securityEnhancementStrategy;

	/**
	 * @var
	 */
	private $networkType;

	/**
	 * @var
	 */
	private $keyPairName;

	/**
	 * @var
	 */
	private $spotPriceLimit;

	/**
	 * @var
	 */
	private $imageOwnerAlias;

	/**
	 * @var
	 */
	private $resourceGroupId;

	/**
	 * @var
	 */
	private $hostName;

	/**
	 * @var
	 */
	private $systemDiskIops;

	/**
	 * @var
	 */
	private $Tags;

	/**
	 * @var
	 */
	private $period;

	/**
	 * @var
	 */
	private $launchTemplateId;

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
	private $spotStrategy;

	/**
	 * @var
	 */
	private $instanceName;

	/**
	 * @var
	 */
	private $internetChargeType;

	/**
	 * @var
	 */
	private $zoneId;

	/**
	 * @var
	 */
	private $internetMaxBandwidthIn;

	/**
	 * @var
	 */
	private $versionDescription;

	/**
	 * @var
	 */
	private $imageId;

	/**
	 * @var
	 */
	private $ioOptimized;

	/**
	 * @var
	 */
	private $securityGroupId;

	/**
	 * @var
	 */
	private $internetMaxBandwidthOut;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $systemDiskCategory;

	/**
	 * @var
	 */
	private $userData;

	/**
	 * @var
	 */
	private $instanceType;

	/**
	 * @var
	 */
	private $instanceChargeType;

	/**
	 * @var
	 */
	private $enableVmOsConfig;

	/**
	 * @var
	 */
	private $NetworkInterfaces;

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
	private $systemDiskDiskName;

	/**
	 * @var
	 */
	private $ramRoleName;

	/**
	 * @var
	 */
	private $autoReleaseTime;

	/**
	 * @var
	 */
	private $spotDuration;

	/**
	 * @var
	 */
	private $DataDisks;

	/**
	 * @var
	 */
	private $systemDiskSize;

	/**
	 * @var
	 */
	private $vpcId;

	/**
	 * @var
	 */
	private $systemDiskDescription;

	/**
	 * @return mixed
	 */
	public function getLaunchTemplateName() {
		return $this->launchTemplateName;
	}

	/**
	 * @param $launchTemplateName
	 */
	public function setLaunchTemplateName($launchTemplateName) {
		$this->launchTemplateName                    = $launchTemplateName;
		$this->apiParameters['LaunchTemplateName'] = $launchTemplateName;
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
	public function getNetworkType() {
		return $this->networkType;
	}

	/**
	 * @param $networkType
	 */
	public function setNetworkType($networkType) {
		$this->networkType                    = $networkType;
		$this->apiParameters['NetworkType'] = $networkType;
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
	public function getSpotPriceLimit() {
		return $this->spotPriceLimit;
	}

	/**
	 * @param $spotPriceLimit
	 */
	public function setSpotPriceLimit($spotPriceLimit) {
		$this->spotPriceLimit                    = $spotPriceLimit;
		$this->apiParameters['SpotPriceLimit'] = $spotPriceLimit;
	}

	/**
	 * @return mixed
	 */
	public function getImageOwnerAlias() {
		return $this->imageOwnerAlias;
	}

	/**
	 * @param $imageOwnerAlias
	 */
	public function setImageOwnerAlias($imageOwnerAlias) {
		$this->imageOwnerAlias                    = $imageOwnerAlias;
		$this->apiParameters['ImageOwnerAlias'] = $imageOwnerAlias;
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
	public function getHostName() {
		return $this->hostName;
	}

	/**
	 * @param $hostName
	 */
	public function setHostName($hostName) {
		$this->hostName                    = $hostName;
		$this->apiParameters['HostName'] = $hostName;
	}

	/**
	 * @return mixed
	 */
	public function getSystemDiskIops() {
		return $this->systemDiskIops;
	}

	/**
	 * @param $systemDiskIops
	 */
	public function setSystemDiskIops($systemDiskIops) {
		$this->systemDiskIops                     = $systemDiskIops;
		$this->apiParameters['SystemDisk.Iops'] = $systemDiskIops;
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
	public function getPeriod() {
		return $this->period;
	}

	/**
	 * @param $period
	 */
	public function setPeriod($period) {
		$this->period                    = $period;
		$this->apiParameters['Period'] = $period;
	}

	/**
	 * @return mixed
	 */
	public function getLaunchTemplateId() {
		return $this->launchTemplateId;
	}

	/**
	 * @param $launchTemplateId
	 */
	public function setLaunchTemplateId($launchTemplateId) {
		$this->launchTemplateId                    = $launchTemplateId;
		$this->apiParameters['LaunchTemplateId'] = $launchTemplateId;
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
	public function getSpotStrategy() {
		return $this->spotStrategy;
	}

	/**
	 * @param $spotStrategy
	 */
	public function setSpotStrategy($spotStrategy) {
		$this->spotStrategy                    = $spotStrategy;
		$this->apiParameters['SpotStrategy'] = $spotStrategy;
	}

	/**
	 * @return mixed
	 */
	public function getInstanceName() {
		return $this->instanceName;
	}

	/**
	 * @param $instanceName
	 */
	public function setInstanceName($instanceName) {
		$this->instanceName                    = $instanceName;
		$this->apiParameters['InstanceName'] = $instanceName;
	}

	/**
	 * @return mixed
	 */
	public function getInternetChargeType() {
		return $this->internetChargeType;
	}

	/**
	 * @param $internetChargeType
	 */
	public function setInternetChargeType($internetChargeType) {
		$this->internetChargeType                    = $internetChargeType;
		$this->apiParameters['InternetChargeType'] = $internetChargeType;
	}

	/**
	 * @return mixed
	 */
	public function getZoneId() {
		return $this->zoneId;
	}

	/**
	 * @param $zoneId
	 */
	public function setZoneId($zoneId) {
		$this->zoneId                    = $zoneId;
		$this->apiParameters['ZoneId'] = $zoneId;
	}

	/**
	 * @return mixed
	 */
	public function getInternetMaxBandwidthIn() {
		return $this->internetMaxBandwidthIn;
	}

	/**
	 * @param $internetMaxBandwidthIn
	 */
	public function setInternetMaxBandwidthIn($internetMaxBandwidthIn) {
		$this->internetMaxBandwidthIn                    = $internetMaxBandwidthIn;
		$this->apiParameters['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;
	}

	/**
	 * @return mixed
	 */
	public function getVersionDescription() {
		return $this->versionDescription;
	}

	/**
	 * @param $versionDescription
	 */
	public function setVersionDescription($versionDescription) {
		$this->versionDescription                    = $versionDescription;
		$this->apiParameters['VersionDescription'] = $versionDescription;
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
	public function getIoOptimized() {
		return $this->ioOptimized;
	}

	/**
	 * @param $ioOptimized
	 */
	public function setIoOptimized($ioOptimized) {
		$this->ioOptimized                    = $ioOptimized;
		$this->apiParameters['IoOptimized'] = $ioOptimized;
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
	public function getInternetMaxBandwidthOut() {
		return $this->internetMaxBandwidthOut;
	}

	/**
	 * @param $internetMaxBandwidthOut
	 */
	public function setInternetMaxBandwidthOut($internetMaxBandwidthOut) {
		$this->internetMaxBandwidthOut                    = $internetMaxBandwidthOut;
		$this->apiParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;
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
	public function getSystemDiskCategory() {
		return $this->systemDiskCategory;
	}

	/**
	 * @param $systemDiskCategory
	 */
	public function setSystemDiskCategory($systemDiskCategory) {
		$this->systemDiskCategory                     = $systemDiskCategory;
		$this->apiParameters['SystemDisk.Category'] = $systemDiskCategory;
	}

	/**
	 * @return mixed
	 */
	public function getUserData() {
		return $this->userData;
	}

	/**
	 * @param $userData
	 */
	public function setUserData($userData) {
		$this->userData                    = $userData;
		$this->apiParameters['UserData'] = $userData;
	}

	/**
	 * @return mixed
	 */
	public function getInstanceType() {
		return $this->instanceType;
	}

	/**
	 * @param $instanceType
	 */
	public function setInstanceType($instanceType) {
		$this->instanceType                    = $instanceType;
		$this->apiParameters['InstanceType'] = $instanceType;
	}

	/**
	 * @return mixed
	 */
	public function getInstanceChargeType() {
		return $this->instanceChargeType;
	}

	/**
	 * @param $instanceChargeType
	 */
	public function setInstanceChargeType($instanceChargeType) {
		$this->instanceChargeType                    = $instanceChargeType;
		$this->apiParameters['InstanceChargeType'] = $instanceChargeType;
	}

	/**
	 * @return mixed
	 */
	public function getEnableVmOsConfig() {
		return $this->enableVmOsConfig;
	}

	/**
	 * @param $enableVmOsConfig
	 */
	public function setEnableVmOsConfig($enableVmOsConfig) {
		$this->enableVmOsConfig                    = $enableVmOsConfig;
		$this->apiParameters['EnableVmOsConfig'] = $enableVmOsConfig;
	}

	/**
	 * @return mixed
	 */
	public function getNetworkInterfaces() {
		return $this->NetworkInterfaces;
	}

	/**
	 * @param $NetworkInterfaces
	 */
	public function setNetworkInterfaces($NetworkInterfaces) {
		$this->NetworkInterfaces = $NetworkInterfaces;
		for ($i = 0; $i < count($NetworkInterfaces); $i++) {
			$this->apiParameters['NetworkInterface.' . ($i + 1) . '.PrimaryIpAddress']     = $NetworkInterfaces[$i]['PrimaryIpAddress'];
			$this->apiParameters['NetworkInterface.' . ($i + 1) . '.VSwitchId']            = $NetworkInterfaces[$i]['VSwitchId'];
			$this->apiParameters['NetworkInterface.' . ($i + 1) . '.SecurityGroupId']      = $NetworkInterfaces[$i]['SecurityGroupId'];
			$this->apiParameters['NetworkInterface.' . ($i + 1) . '.NetworkInterfaceName'] = $NetworkInterfaces[$i]['NetworkInterfaceName'];
			$this->apiParameters['NetworkInterface.' . ($i + 1) . '.Description']          = $NetworkInterfaces[$i]['Description'];
		}
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
	public function getSystemDiskDiskName() {
		return $this->systemDiskDiskName;
	}

	/**
	 * @param $systemDiskDiskName
	 */
	public function setSystemDiskDiskName($systemDiskDiskName) {
		$this->systemDiskDiskName                     = $systemDiskDiskName;
		$this->apiParameters['SystemDisk.DiskName'] = $systemDiskDiskName;
	}

	/**
	 * @return mixed
	 */
	public function getRamRoleName() {
		return $this->ramRoleName;
	}

	/**
	 * @param $ramRoleName
	 */
	public function setRamRoleName($ramRoleName) {
		$this->ramRoleName                    = $ramRoleName;
		$this->apiParameters['RamRoleName'] = $ramRoleName;
	}

	/**
	 * @return mixed
	 */
	public function getAutoReleaseTime() {
		return $this->autoReleaseTime;
	}

	/**
	 * @param $autoReleaseTime
	 */
	public function setAutoReleaseTime($autoReleaseTime) {
		$this->autoReleaseTime                    = $autoReleaseTime;
		$this->apiParameters['AutoReleaseTime'] = $autoReleaseTime;
	}

	/**
	 * @return mixed
	 */
	public function getSpotDuration() {
		return $this->spotDuration;
	}

	/**
	 * @param $spotDuration
	 */
	public function setSpotDuration($spotDuration) {
		$this->spotDuration                    = $spotDuration;
		$this->apiParameters['SpotDuration'] = $spotDuration;
	}

	/**
	 * @return mixed
	 */
	public function getDataDisks() {
		return $this->DataDisks;
	}

	/**
	 * @param $DataDisks
	 */
	public function setDataDisks($DataDisks) {
		$this->DataDisks = $DataDisks;
		for ($i = 0; $i < count($DataDisks); $i++) {
			$this->apiParameters['DataDisk.' . ($i + 1) . '.Size']               = $DataDisks[$i]['Size'];
			$this->apiParameters['DataDisk.' . ($i + 1) . '.SnapshotId']         = $DataDisks[$i]['SnapshotId'];
			$this->apiParameters['DataDisk.' . ($i + 1) . '.Category']           = $DataDisks[$i]['Category'];
			$this->apiParameters['DataDisk.' . ($i + 1) . '.Encrypted']          = $DataDisks[$i]['Encrypted'];
			$this->apiParameters['DataDisk.' . ($i + 1) . '.DiskName']           = $DataDisks[$i]['DiskName'];
			$this->apiParameters['DataDisk.' . ($i + 1) . '.Description']        = $DataDisks[$i]['Description'];
			$this->apiParameters['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $DataDisks[$i]['DeleteWithInstance'];
		}
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
	public function getVpcId() {
		return $this->vpcId;
	}

	/**
	 * @param $vpcId
	 */
	public function setVpcId($vpcId) {
		$this->vpcId                    = $vpcId;
		$this->apiParameters['VpcId'] = $vpcId;
	}

	/**
	 * @return mixed
	 */
	public function getSystemDiskDescription() {
		return $this->systemDiskDescription;
	}

	/**
	 * @param $systemDiskDescription
	 */
	public function setSystemDiskDescription($systemDiskDescription) {
		$this->systemDiskDescription                     = $systemDiskDescription;
		$this->apiParameters['SystemDisk.Description'] = $systemDiskDescription;
	}

}