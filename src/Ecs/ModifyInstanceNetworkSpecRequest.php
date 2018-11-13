<?php

namespace AlibabaCloud\Ecs;

class ModifyInstanceNetworkSpecRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyInstanceNetworkSpec', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $autoPay;

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
	private $internetMaxBandwidthOut;

	/**
	 * @var
	 */
	private $endTime;

	/**
	 * @var
	 */
	private $startTime;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $instanceId;

	/**
	 * @var
	 */
	private $networkChargeType;

	/**
	 * @var
	 */
	private $internetMaxBandwidthIn;

	/**
	 * @var
	 */
	private $allocatePublicIp;

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
	public function getAutoPay() {
		return $this->autoPay;
	}

	/**
	 * @param $autoPay
	 */
	public function setAutoPay($autoPay) {
		$this->autoPay                    = $autoPay;
		$this->apiParameters['AutoPay'] = $autoPay;
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
	public function getNetworkChargeType() {
		return $this->networkChargeType;
	}

	/**
	 * @param $networkChargeType
	 */
	public function setNetworkChargeType($networkChargeType) {
		$this->networkChargeType                    = $networkChargeType;
		$this->apiParameters['NetworkChargeType'] = $networkChargeType;
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
	public function getAllocatePublicIp() {
		return $this->allocatePublicIp;
	}

	/**
	 * @param $allocatePublicIp
	 */
	public function setAllocatePublicIp($allocatePublicIp) {
		$this->allocatePublicIp                    = $allocatePublicIp;
		$this->apiParameters['AllocatePublicIp'] = $allocatePublicIp;
	}

}