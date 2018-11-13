<?php

namespace AlibabaCloud\Ecs;

class DescribePriceRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribePrice', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $dataDisk3Size;

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
	private $dataDisk3Category;

	/**
	 * @var
	 */
	private $ioOptimized;

	/**
	 * @var
	 */
	private $internetMaxBandwidthOut;

	/**
	 * @var
	 */
	private $systemDiskCategory;

	/**
	 * @var
	 */
	private $dataDisk4Category;

	/**
	 * @var
	 */
	private $dataDisk4Size;

	/**
	 * @var
	 */
	private $priceUnit;

	/**
	 * @var
	 */
	private $instanceType;

	/**
	 * @var
	 */
	private $dataDisk2Category;

	/**
	 * @var
	 */
	private $dataDisk1Size;

	/**
	 * @var
	 */
	private $period;

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
	private $dataDisk2Size;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $resourceType;

	/**
	 * @var
	 */
	private $dataDisk1Category;

	/**
	 * @var
	 */
	private $systemDiskSize;

	/**
	 * @var
	 */
	private $internetChargeType;

	/**
	 * @var
	 */
	private $instanceNetworkType;

	/**
	 * @return mixed
	 */
	public function getDataDisk3Size() {
		return $this->dataDisk3Size;
	}

	/**
	 * @param $dataDisk3Size
	 */
	public function setDataDisk3Size($dataDisk3Size) {
		$this->dataDisk3Size                      = $dataDisk3Size;
		$this->apiParameters['DataDisk.3.Size'] = $dataDisk3Size;
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
	public function getDataDisk3Category() {
		return $this->dataDisk3Category;
	}

	/**
	 * @param $dataDisk3Category
	 */
	public function setDataDisk3Category($dataDisk3Category) {
		$this->dataDisk3Category                      = $dataDisk3Category;
		$this->apiParameters['DataDisk.3.Category'] = $dataDisk3Category;
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
	public function getDataDisk4Category() {
		return $this->dataDisk4Category;
	}

	/**
	 * @param $dataDisk4Category
	 */
	public function setDataDisk4Category($dataDisk4Category) {
		$this->dataDisk4Category                      = $dataDisk4Category;
		$this->apiParameters['DataDisk.4.Category'] = $dataDisk4Category;
	}

	/**
	 * @return mixed
	 */
	public function getDataDisk4Size() {
		return $this->dataDisk4Size;
	}

	/**
	 * @param $dataDisk4Size
	 */
	public function setDataDisk4Size($dataDisk4Size) {
		$this->dataDisk4Size                      = $dataDisk4Size;
		$this->apiParameters['DataDisk.4.Size'] = $dataDisk4Size;
	}

	/**
	 * @return mixed
	 */
	public function getPriceUnit() {
		return $this->priceUnit;
	}

	/**
	 * @param $priceUnit
	 */
	public function setPriceUnit($priceUnit) {
		$this->priceUnit                    = $priceUnit;
		$this->apiParameters['PriceUnit'] = $priceUnit;
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
	public function getDataDisk2Category() {
		return $this->dataDisk2Category;
	}

	/**
	 * @param $dataDisk2Category
	 */
	public function setDataDisk2Category($dataDisk2Category) {
		$this->dataDisk2Category                      = $dataDisk2Category;
		$this->apiParameters['DataDisk.2.Category'] = $dataDisk2Category;
	}

	/**
	 * @return mixed
	 */
	public function getDataDisk1Size() {
		return $this->dataDisk1Size;
	}

	/**
	 * @param $dataDisk1Size
	 */
	public function setDataDisk1Size($dataDisk1Size) {
		$this->dataDisk1Size                      = $dataDisk1Size;
		$this->apiParameters['DataDisk.1.Size'] = $dataDisk1Size;
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
	public function getDataDisk2Size() {
		return $this->dataDisk2Size;
	}

	/**
	 * @param $dataDisk2Size
	 */
	public function setDataDisk2Size($dataDisk2Size) {
		$this->dataDisk2Size                      = $dataDisk2Size;
		$this->apiParameters['DataDisk.2.Size'] = $dataDisk2Size;
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
	public function getResourceType() {
		return $this->resourceType;
	}

	/**
	 * @param $resourceType
	 */
	public function setResourceType($resourceType) {
		$this->resourceType                    = $resourceType;
		$this->apiParameters['ResourceType'] = $resourceType;
	}

	/**
	 * @return mixed
	 */
	public function getDataDisk1Category() {
		return $this->dataDisk1Category;
	}

	/**
	 * @param $dataDisk1Category
	 */
	public function setDataDisk1Category($dataDisk1Category) {
		$this->dataDisk1Category                      = $dataDisk1Category;
		$this->apiParameters['DataDisk.1.Category'] = $dataDisk1Category;
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

}