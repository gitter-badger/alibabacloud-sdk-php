<?php

namespace AlibabaCloud\Ecs;

class DescribeNetworkInterfacesRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeNetworkInterfaces', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $securityGroupId;

	/**
	 * @var
	 */
	private $type;

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
	private $pageSize;

	/**
	 * @var
	 */
	private $Tags;

	/**
	 * @var
	 */
	private $networkInterfaceName;

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
	private $ownerId;

	/**
	 * @var
	 */
	private $vSwitchId;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $vpcId;

	/**
	 * @var
	 */
	private $primaryIpAddress;

	/**
	 * @var
	 */
	private $NetworkInterfaceIds;

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
	public function getType() {
		return $this->type;
	}

	/**
	 * @param $type
	 */
	public function setType($type) {
		$this->type                    = $type;
		$this->apiParameters['Type'] = $type;
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
	public function getNetworkInterfaceName() {
		return $this->networkInterfaceName;
	}

	/**
	 * @param $networkInterfaceName
	 */
	public function setNetworkInterfaceName($networkInterfaceName) {
		$this->networkInterfaceName                    = $networkInterfaceName;
		$this->apiParameters['NetworkInterfaceName'] = $networkInterfaceName;
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
	public function getPrimaryIpAddress() {
		return $this->primaryIpAddress;
	}

	/**
	 * @param $primaryIpAddress
	 */
	public function setPrimaryIpAddress($primaryIpAddress) {
		$this->primaryIpAddress                    = $primaryIpAddress;
		$this->apiParameters['PrimaryIpAddress'] = $primaryIpAddress;
	}

	/**
	 * @return mixed
	 */
	public function getNetworkInterfaceIds() {
		return $this->NetworkInterfaceIds;
	}

	/**
	 * @param $NetworkInterfaceIds
	 */
	public function setNetworkInterfaceIds($NetworkInterfaceIds) {
		$this->NetworkInterfaceIds = $NetworkInterfaceIds;
		for ($i = 0; $i < count($NetworkInterfaceIds); $i++) {
			$this->apiParameters['NetworkInterfaceId.' . ($i + 1)] = $NetworkInterfaceIds[$i];
		}
	}

}