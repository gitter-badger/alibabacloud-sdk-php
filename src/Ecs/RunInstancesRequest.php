<?php

namespace AlibabaCloud\Ecs;

class RunInstancesRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'RunInstances', 'ecs', 'openAPI');
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
	private $uniqueSuffix;

	/**
	 * @var
	 */
	private $hpcClusterId;

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
	private $spotPriceLimit;

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
	private $password;

	/**
	 * @var
	 */
	private $Tags;

	/**
	 * @var
	 */
	private $autoRenewPeriod;

	/**
	 * @var
	 */
	private $period;

	/**
	 * @var
	 */
	private $dryRun;

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
	private $privateIpAddress;

	/**
	 * @var
	 */
	private $periodUnit;

	/**
	 * @var
	 */
	private $instanceName;

	/**
	 * @var
	 */
	private $autoRenew;

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
	private $imageId;

	/**
	 * @var
	 */
	private $spotInterruptionBehavior;

	/**
	 * @var
	 */
	private $clientToken;

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
	private $passwordInherit;

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
	private $NetworkInterfaces;

	/**
	 * @var
	 */
	private $deploymentSetId;

	/**
	 * @var
	 */
	private $amount;

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
	private $dedicatedHostId;

	/**
	 * @var
	 */
	private $creditSpecification;

	/**
	 * @var
	 */
	private $DataDisks;

	/**
	 * @var
	 */
	private $launchTemplateVersion;

	/**
	 * @var
	 */
	private $systemDiskSize;

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
	public function getUniqueSuffix() {
		return $this->uniqueSuffix;
	}

	/**
	 * @param $uniqueSuffix
	 */
	public function setUniqueSuffix($uniqueSuffix) {
		$this->uniqueSuffix                    = $uniqueSuffix;
		$this->apiParameters['UniqueSuffix'] = $uniqueSuffix;
	}

	/**
	 * @return mixed
	 */
	public function getHpcClusterId() {
		return $this->hpcClusterId;
	}

	/**
	 * @param $hpcClusterId
	 */
	public function setHpcClusterId($hpcClusterId) {
		$this->hpcClusterId                    = $hpcClusterId;
		$this->apiParameters['HpcClusterId'] = $hpcClusterId;
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
	public function getAutoRenewPeriod() {
		return $this->autoRenewPeriod;
	}

	/**
	 * @param $autoRenewPeriod
	 */
	public function setAutoRenewPeriod($autoRenewPeriod) {
		$this->autoRenewPeriod                    = $autoRenewPeriod;
		$this->apiParameters['AutoRenewPeriod'] = $autoRenewPeriod;
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
	public function getDryRun() {
		return $this->dryRun;
	}

	/**
	 * @param $dryRun
	 */
	public function setDryRun($dryRun) {
		$this->dryRun                    = $dryRun;
		$this->apiParameters['DryRun'] = $dryRun;
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
	public function getPrivateIpAddress() {
		return $this->privateIpAddress;
	}

	/**
	 * @param $privateIpAddress
	 */
	public function setPrivateIpAddress($privateIpAddress) {
		$this->privateIpAddress                    = $privateIpAddress;
		$this->apiParameters['PrivateIpAddress'] = $privateIpAddress;
	}

	/**
	 * @return mixed
	 */
	public function getPeriodUnit() {
		return $this->periodUnit;
	}

	/**
	 * @param $periodUnit
	 */
	public function setPeriodUnit($periodUnit) {
		$this->periodUnit                    = $periodUnit;
		$this->apiParameters['PeriodUnit'] = $periodUnit;
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
	public function getAutoRenew() {
		return $this->autoRenew;
	}

	/**
	 * @param $autoRenew
	 */
	public function setAutoRenew($autoRenew) {
		$this->autoRenew                    = $autoRenew;
		$this->apiParameters['AutoRenew'] = $autoRenew;
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
	public function getSpotInterruptionBehavior() {
		return $this->spotInterruptionBehavior;
	}

	/**
	 * @param $spotInterruptionBehavior
	 */
	public function setSpotInterruptionBehavior($spotInterruptionBehavior) {
		$this->spotInterruptionBehavior                    = $spotInterruptionBehavior;
		$this->apiParameters['SpotInterruptionBehavior'] = $spotInterruptionBehavior;
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
	public function getDeploymentSetId() {
		return $this->deploymentSetId;
	}

	/**
	 * @param $deploymentSetId
	 */
	public function setDeploymentSetId($deploymentSetId) {
		$this->deploymentSetId                    = $deploymentSetId;
		$this->apiParameters['DeploymentSetId'] = $deploymentSetId;
	}

	/**
	 * @return mixed
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * @param $amount
	 */
	public function setAmount($amount) {
		$this->amount                    = $amount;
		$this->apiParameters['Amount'] = $amount;
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
	public function getDedicatedHostId() {
		return $this->dedicatedHostId;
	}

	/**
	 * @param $dedicatedHostId
	 */
	public function setDedicatedHostId($dedicatedHostId) {
		$this->dedicatedHostId                    = $dedicatedHostId;
		$this->apiParameters['DedicatedHostId'] = $dedicatedHostId;
	}

	/**
	 * @return mixed
	 */
	public function getCreditSpecification() {
		return $this->creditSpecification;
	}

	/**
	 * @param $creditSpecification
	 */
	public function setCreditSpecification($creditSpecification) {
		$this->creditSpecification                    = $creditSpecification;
		$this->apiParameters['CreditSpecification'] = $creditSpecification;
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
			$this->apiParameters['DataDisk.' . ($i + 1) . '.Device']             = $DataDisks[$i]['Device'];
			$this->apiParameters['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $DataDisks[$i]['DeleteWithInstance'];
		}
	}

	/**
	 * @return mixed
	 */
	public function getLaunchTemplateVersion() {
		return $this->launchTemplateVersion;
	}

	/**
	 * @param $launchTemplateVersion
	 */
	public function setLaunchTemplateVersion($launchTemplateVersion) {
		$this->launchTemplateVersion                    = $launchTemplateVersion;
		$this->apiParameters['LaunchTemplateVersion'] = $launchTemplateVersion;
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