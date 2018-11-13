<?php

namespace AlibabaCloud\Ecs;

class CreateRouteEntryRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'CreateRouteEntry', 'ecs', 'openAPI');
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
	private $clientToken;

	/**
	 * @var
	 */
	private $destinationCidrBlock;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $nextHopId;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $nextHopType;

	/**
	 * @var
	 */
	private $NextHopLists;

	/**
	 * @var
	 */
	private $routeTableId;

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
	public function getDestinationCidrBlock() {
		return $this->destinationCidrBlock;
	}

	/**
	 * @param $destinationCidrBlock
	 */
	public function setDestinationCidrBlock($destinationCidrBlock) {
		$this->destinationCidrBlock                    = $destinationCidrBlock;
		$this->apiParameters['DestinationCidrBlock'] = $destinationCidrBlock;
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
	public function getNextHopId() {
		return $this->nextHopId;
	}

	/**
	 * @param $nextHopId
	 */
	public function setNextHopId($nextHopId) {
		$this->nextHopId                    = $nextHopId;
		$this->apiParameters['NextHopId'] = $nextHopId;
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
	public function getNextHopType() {
		return $this->nextHopType;
	}

	/**
	 * @param $nextHopType
	 */
	public function setNextHopType($nextHopType) {
		$this->nextHopType                    = $nextHopType;
		$this->apiParameters['NextHopType'] = $nextHopType;
	}

	/**
	 * @return mixed
	 */
	public function getNextHopLists() {
		return $this->NextHopLists;
	}

	/**
	 * @param $NextHopLists
	 */
	public function setNextHopLists($NextHopLists) {
		$this->NextHopLists = $NextHopLists;
		for ($i = 0; $i < count($NextHopLists); $i++) {
			$this->apiParameters['NextHopList.' . ($i + 1) . '.NextHopId']   = $NextHopLists[$i]['NextHopId'];
			$this->apiParameters['NextHopList.' . ($i + 1) . '.NextHopType'] = $NextHopLists[$i]['NextHopType'];
		}
	}

	/**
	 * @return mixed
	 */
	public function getRouteTableId() {
		return $this->routeTableId;
	}

	/**
	 * @param $routeTableId
	 */
	public function setRouteTableId($routeTableId) {
		$this->routeTableId                    = $routeTableId;
		$this->apiParameters['RouteTableId'] = $routeTableId;
	}

}