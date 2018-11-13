<?php

namespace AlibabaCloud\Ecs;

class DescribeSpotPriceHistoryRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeSpotPriceHistory', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $ioOptimized;

	/**
	 * @var
	 */
	private $networkType;

	/**
	 * @var
	 */
	private $startTime;

	/**
	 * @var
	 */
	private $instanceType;

	/**
	 * @var
	 */
	private $offset;

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
	private $endTime;

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
	private $zoneId;

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
	public function getStartTime() {
		return $this->startTime;
	}

	/**
	 * @param $startTime
	 */
	public function setStartTime($startTime) {
		$this->startTime                    = $startTime;
		$this->apiParameters['StartTime'] = $startTime;
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
	public function getOffset() {
		return $this->offset;
	}

	/**
	 * @param $offset
	 */
	public function setOffset($offset) {
		$this->offset                    = $offset;
		$this->apiParameters['Offset'] = $offset;
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
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * @param $endTime
	 */
	public function setEndTime($endTime) {
		$this->endTime                    = $endTime;
		$this->apiParameters['EndTime'] = $endTime;
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

}