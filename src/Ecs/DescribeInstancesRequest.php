<?php

namespace AlibabaCloud\Ecs;

use AlibabaCloud\Core\RpcRequest;

/**
 * Class DescribeInstancesRequest
 *
 * @package AlibabaCloud\Ecs
 */
class DescribeInstancesRequest extends RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeInstances', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $innerIpAddresses;

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
	private $privateIpAddresses;

	/**
	 * @var
	 */
	private $hpcClusterId;

	/**
	 * @var
	 */
	private $filter2Value;

	/**
	 * @var
	 */
	private $filter4Value;

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
	private $keyPairName;

	/**
	 * @var
	 */
	private $filter4Key;

	/**
	 * @var
	 */
	private $pageNumber;

	/**
	 * @var
	 */
	private $resourceGroupId;

	/**
	 * @var
	 */
	private $lockReason;

	/**
	 * @var
	 */
	private $filter1Key;

	/**
	 * @var
	 */
	private $rdmaIpAddresses;

	/**
	 * @var
	 */
	private $deviceAvailable;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $publicIpAddresses;

	/**
	 * @var
	 */
	private $instanceType;

	/**
	 * @var
	 */
	private $Tags;

	/**
	 * @var
	 */
	private $instanceChargeType;

	/**
	 * @var
	 */
	private $filter3Value;

	/**
	 * @var
	 */
	private $dryRun;

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
	private $instanceTypeFamily;

	/**
	 * @var
	 */
	private $filter1Value;

	/**
	 * @var
	 */
	private $needSaleCycle;

	/**
	 * @var
	 */
	private $filter2Key;

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
	private $eipAddresses;

	/**
	 * @var
	 */
	private $instanceName;

	/**
	 * @var
	 */
	private $instanceIds;

	/**
	 * @var
	 */
	private $internetChargeType;

	/**
	 * @var
	 */
	private $vpcId;

	/**
	 * @var
	 */
	private $zoneId;

	/**
	 * @var
	 */
	private $filter3Key;

	/**
	 * @var
	 */
	private $instanceNetworkType;

	/**
	 * @var
	 */
	private $status;

	/**
	 * @return mixed
	 */
	public function getInnerIpAddresses() {
		return $this->innerIpAddresses;
	}

	/**
	 * @param $innerIpAddresses
	 */
	public function setInnerIpAddresses($innerIpAddresses) {
		$this->innerIpAddresses                    = $innerIpAddresses;
		$this->apiParameters['InnerIpAddresses'] = $innerIpAddresses;
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
	public function getPrivateIpAddresses() {
		return $this->privateIpAddresses;
	}

	/**
	 * @param $privateIpAddresses
	 */
	public function setPrivateIpAddresses($privateIpAddresses) {
		$this->privateIpAddresses                    = $privateIpAddresses;
		$this->apiParameters['PrivateIpAddresses'] = $privateIpAddresses;
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
	public function getFilter2Value() {
		return $this->filter2Value;
	}

	/**
	 * @param $filter2Value
	 */
	public function setFilter2Value($filter2Value) {
		$this->filter2Value                      = $filter2Value;
		$this->apiParameters['Filter.2.Value'] = $filter2Value;
	}

	/**
	 * @return mixed
	 */
	public function getFilter4Value() {
		return $this->filter4Value;
	}

	/**
	 * @param $filter4Value
	 */
	public function setFilter4Value($filter4Value) {
		$this->filter4Value                      = $filter4Value;
		$this->apiParameters['Filter.4.Value'] = $filter4Value;
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
	public function getFilter4Key() {
		return $this->filter4Key;
	}

	/**
	 * @param $filter4Key
	 */
	public function setFilter4Key($filter4Key) {
		$this->filter4Key                      = $filter4Key;
		$this->apiParameters['Filter.4.Key'] = $filter4Key;
	}

	/**
	 * @return mixed
	 */
	public function getPageNumber() {
		return $this->pageNumber;
	}

	/**
	 * @param $pageNumber
	 */
	public function setPageNumber($pageNumber) {
		$this->pageNumber                    = $pageNumber;
		$this->apiParameters['PageNumber'] = $pageNumber;
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
	public function getLockReason() {
		return $this->lockReason;
	}

	/**
	 * @param $lockReason
	 */
	public function setLockReason($lockReason) {
		$this->lockReason                    = $lockReason;
		$this->apiParameters['LockReason'] = $lockReason;
	}

	/**
	 * @return mixed
	 */
	public function getFilter1Key() {
		return $this->filter1Key;
	}

	/**
	 * @param $filter1Key
	 */
	public function setFilter1Key($filter1Key) {
		$this->filter1Key                      = $filter1Key;
		$this->apiParameters['Filter.1.Key'] = $filter1Key;
	}

	/**
	 * @return mixed
	 */
	public function getRdmaIpAddresses() {
		return $this->rdmaIpAddresses;
	}

	/**
	 * @param $rdmaIpAddresses
	 */
	public function setRdmaIpAddresses($rdmaIpAddresses) {
		$this->rdmaIpAddresses                    = $rdmaIpAddresses;
		$this->apiParameters['RdmaIpAddresses'] = $rdmaIpAddresses;
	}

	/**
	 * @return mixed
	 */
	public function getDeviceAvailable() {
		return $this->deviceAvailable;
	}

	/**
	 * @param $deviceAvailable
	 */
	public function setDeviceAvailable($deviceAvailable) {
		$this->deviceAvailable                    = $deviceAvailable;
		$this->apiParameters['DeviceAvailable'] = $deviceAvailable;
	}

	/**
	 * @return mixed
	 */
	public function getPageSize() {
		return $this->pageSize;
	}

	/**
	 * @param $pageSize
	 */
	public function setPageSize($pageSize) {
		$this->pageSize                    = $pageSize;
		$this->apiParameters['PageSize'] = $pageSize;
	}

	/**
	 * @return mixed
	 */
	public function getPublicIpAddresses() {
		return $this->publicIpAddresses;
	}

	/**
	 * @param $publicIpAddresses
	 */
	public function setPublicIpAddresses($publicIpAddresses) {
		$this->publicIpAddresses                    = $publicIpAddresses;
		$this->apiParameters['PublicIpAddresses'] = $publicIpAddresses;
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
	public function getFilter3Value() {
		return $this->filter3Value;
	}

	/**
	 * @param $filter3Value
	 */
	public function setFilter3Value($filter3Value) {
		$this->filter3Value                      = $filter3Value;
		$this->apiParameters['Filter.3.Value'] = $filter3Value;
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
	public function getInstanceTypeFamily() {
		return $this->instanceTypeFamily;
	}

	/**
	 * @param $instanceTypeFamily
	 */
	public function setInstanceTypeFamily($instanceTypeFamily) {
		$this->instanceTypeFamily                    = $instanceTypeFamily;
		$this->apiParameters['InstanceTypeFamily'] = $instanceTypeFamily;
	}

	/**
	 * @return mixed
	 */
	public function getFilter1Value() {
		return $this->filter1Value;
	}

	/**
	 * @param $filter1Value
	 */
	public function setFilter1Value($filter1Value) {
		$this->filter1Value                      = $filter1Value;
		$this->apiParameters['Filter.1.Value'] = $filter1Value;
	}

	/**
	 * @return mixed
	 */
	public function getNeedSaleCycle() {
		return $this->needSaleCycle;
	}

	/**
	 * @param $needSaleCycle
	 */
	public function setNeedSaleCycle($needSaleCycle) {
		$this->needSaleCycle                    = $needSaleCycle;
		$this->apiParameters['NeedSaleCycle'] = $needSaleCycle;
	}

	/**
	 * @return mixed
	 */
	public function getFilter2Key() {
		return $this->filter2Key;
	}

	/**
	 * @param $filter2Key
	 */
	public function setFilter2Key($filter2Key) {
		$this->filter2Key                      = $filter2Key;
		$this->apiParameters['Filter.2.Key'] = $filter2Key;
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
	public function getEipAddresses() {
		return $this->eipAddresses;
	}

	/**
	 * @param $eipAddresses
	 */
	public function setEipAddresses($eipAddresses) {
		$this->eipAddresses                    = $eipAddresses;
		$this->apiParameters['EipAddresses'] = $eipAddresses;
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
	public function getInstanceIds() {
		return $this->instanceIds;
	}

	/**
	 * @param $instanceIds
	 */
	public function setInstanceIds($instanceIds) {
		$this->instanceIds                    = $instanceIds;
		$this->apiParameters['InstanceIds'] = $instanceIds;
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
	public function getFilter3Key() {
		return $this->filter3Key;
	}

	/**
	 * @param $filter3Key
	 */
	public function setFilter3Key($filter3Key) {
		$this->filter3Key                      = $filter3Key;
		$this->apiParameters['Filter.3.Key'] = $filter3Key;
	}

	/**
	 * @return mixed
	 */
	public function getInstanceNetworkType() {
		return $this->instanceNetworkType;
	}

	/**
	 * @param $instanceNetworkType
	 */
	public function setInstanceNetworkType($instanceNetworkType) {
		$this->instanceNetworkType                    = $instanceNetworkType;
		$this->apiParameters['InstanceNetworkType'] = $instanceNetworkType;
	}

	/**
	 * @return mixed
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param $status
	 */
	public function setStatus($status) {
		$this->status                    = $status;
		$this->apiParameters['Status'] = $status;
	}

}