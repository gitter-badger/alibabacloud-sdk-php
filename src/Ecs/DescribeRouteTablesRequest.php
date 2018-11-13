<?php

namespace AlibabaCloud\Ecs;

class DescribeRouteTablesRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeRouteTables', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $vRouterId;

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
	private $pageNumber;

	/**
	 * @var
	 */
	private $routerType;

	/**
	 * @var
	 */
	private $routeTableName;

	/**
	 * @var
	 */
	private $routerId;

	/**
	 * @var
	 */
	private $pageSize;

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
	public function getVRouterId() {
		return $this->vRouterId;
	}

	/**
	 * @param $vRouterId
	 */
	public function setVRouterId($vRouterId) {
		$this->vRouterId                    = $vRouterId;
		$this->apiParameters['VRouterId'] = $vRouterId;
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
	public function getRouterType() {
		return $this->routerType;
	}

	/**
	 * @param $routerType
	 */
	public function setRouterType($routerType) {
		$this->routerType                    = $routerType;
		$this->apiParameters['RouterType'] = $routerType;
	}

	/**
	 * @return mixed
	 */
	public function getRouteTableName() {
		return $this->routeTableName;
	}

	/**
	 * @param $routeTableName
	 */
	public function setRouteTableName($routeTableName) {
		$this->routeTableName                    = $routeTableName;
		$this->apiParameters['RouteTableName'] = $routeTableName;
	}

	/**
	 * @return mixed
	 */
	public function getRouterId() {
		return $this->routerId;
	}

	/**
	 * @param $routerId
	 */
	public function setRouterId($routerId) {
		$this->routerId                    = $routerId;
		$this->apiParameters['RouterId'] = $routerId;
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