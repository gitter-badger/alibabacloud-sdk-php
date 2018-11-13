<?php

namespace AlibabaCloud\Ecs;

class DescribeTasksRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeTasks', 'ecs', 'openAPI');
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
	private $taskIds;

	/**
	 * @var
	 */
	private $pageNumber;

	/**
	 * @var
	 */
	private $taskStatus;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $taskAction;

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
	public function getTaskIds() {
		return $this->taskIds;
	}

	/**
	 * @param $taskIds
	 */
	public function setTaskIds($taskIds) {
		$this->taskIds                    = $taskIds;
		$this->apiParameters['TaskIds'] = $taskIds;
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
	public function getTaskStatus() {
		return $this->taskStatus;
	}

	/**
	 * @param $taskStatus
	 */
	public function setTaskStatus($taskStatus) {
		$this->taskStatus                    = $taskStatus;
		$this->apiParameters['TaskStatus'] = $taskStatus;
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
	public function getTaskAction() {
		return $this->taskAction;
	}

	/**
	 * @param $taskAction
	 */
	public function setTaskAction($taskAction) {
		$this->taskAction                    = $taskAction;
		$this->apiParameters['TaskAction'] = $taskAction;
	}

}