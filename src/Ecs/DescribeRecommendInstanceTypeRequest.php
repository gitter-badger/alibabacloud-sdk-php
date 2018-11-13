<?php

namespace AlibabaCloud\Ecs;

class DescribeRecommendInstanceTypeRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeRecommendInstanceType', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

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
	private $ownerAccount;

	/**
	 * @var
	 */
	private $channel;

	/**
	 * @var
	 */
	private $networkType;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $operator;

	/**
	 * @var
	 */
	private $token;

	/**
	 * @var
	 */
	private $scene;

	/**
	 * @var
	 */
	private $instanceType;

	/**
	 * @var
	 */
	private $proxyId;

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
	public function getchannel() {
		return $this->channel;
	}

	/**
	 * @param $channel
	 */
	public function setchannel($channel) {
		$this->channel                    = $channel;
		$this->apiParameters['channel'] = $channel;
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
	public function getoperator() {
		return $this->operator;
	}

	/**
	 * @param $operator
	 */
	public function setoperator($operator) {
		$this->operator                    = $operator;
		$this->apiParameters['operator'] = $operator;
	}

	/**
	 * @return mixed
	 */
	public function gettoken() {
		return $this->token;
	}

	/**
	 * @param $token
	 */
	public function settoken($token) {
		$this->token                    = $token;
		$this->apiParameters['token'] = $token;
	}

	/**
	 * @return mixed
	 */
	public function getScene() {
		return $this->scene;
	}

	/**
	 * @param $scene
	 */
	public function setScene($scene) {
		$this->scene                    = $scene;
		$this->apiParameters['Scene'] = $scene;
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
	public function getproxyId() {
		return $this->proxyId;
	}

	/**
	 * @param $proxyId
	 */
	public function setproxyId($proxyId) {
		$this->proxyId                    = $proxyId;
		$this->apiParameters['proxyId'] = $proxyId;
	}

}