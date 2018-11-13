<?php

namespace AlibabaCloud\Ecs;

class DescribeInvocationsRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeInvocations', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $invokeStatus;

	/**
	 * @var
	 */
	private $commandId;

	/**
	 * @var
	 */
	private $pageNumber;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $invokeId;

	/**
	 * @var
	 */
	private $timed;

	/**
	 * @var
	 */
	private $commandName;

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
	private $commandType;

	/**
	 * @var
	 */
	private $instanceId;

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
	public function getInvokeStatus() {
		return $this->invokeStatus;
	}

	/**
	 * @param $invokeStatus
	 */
	public function setInvokeStatus($invokeStatus) {
		$this->invokeStatus                    = $invokeStatus;
		$this->apiParameters['InvokeStatus'] = $invokeStatus;
	}

	/**
	 * @return mixed
	 */
	public function getCommandId() {
		return $this->commandId;
	}

	/**
	 * @param $commandId
	 */
	public function setCommandId($commandId) {
		$this->commandId                    = $commandId;
		$this->apiParameters['CommandId'] = $commandId;
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
	public function getInvokeId() {
		return $this->invokeId;
	}

	/**
	 * @param $invokeId
	 */
	public function setInvokeId($invokeId) {
		$this->invokeId                    = $invokeId;
		$this->apiParameters['InvokeId'] = $invokeId;
	}

	/**
	 * @return mixed
	 */
	public function getTimed() {
		return $this->timed;
	}

	/**
	 * @param $timed
	 */
	public function setTimed($timed) {
		$this->timed                    = $timed;
		$this->apiParameters['Timed'] = $timed;
	}

	/**
	 * @return mixed
	 */
	public function getCommandName() {
		return $this->commandName;
	}

	/**
	 * @param $commandName
	 */
	public function setCommandName($commandName) {
		$this->commandName                    = $commandName;
		$this->apiParameters['CommandName'] = $commandName;
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
	public function getCommandType() {
		return $this->commandType;
	}

	/**
	 * @param $commandType
	 */
	public function setCommandType($commandType) {
		$this->commandType                    = $commandType;
		$this->apiParameters['CommandType'] = $commandType;
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

}