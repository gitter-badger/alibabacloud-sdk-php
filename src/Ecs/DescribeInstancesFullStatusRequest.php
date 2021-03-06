<?php

namespace AlibabaCloud\Ecs;

class DescribeInstancesFullStatusRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeInstancesFullStatus', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $EventIds;

	/**
	 * @var
	 */
	private $resourceOwnerId;

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
	private $eventPublishTimeEnd;

	/**
	 * @var
	 */
	private $InstanceEventTypes;

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
	private $notBeforeStart;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $eventPublishTimeStart;

	/**
	 * @var
	 */
	private $InstanceIds;

	/**
	 * @var
	 */
	private $notBeforeEnd;

	/**
	 * @var
	 */
	private $healthStatus;

	/**
	 * @var
	 */
	private $eventType;

	/**
	 * @var
	 */
	private $status;

	/**
	 * @return mixed
	 */
	public function getEventIds() {
		return $this->EventIds;
	}

	/**
	 * @param $EventIds
	 */
	public function setEventIds($EventIds) {
		$this->EventIds = $EventIds;
		for ($i = 0; $i < count($EventIds); $i++) {
			$this->apiParameters['EventId.' . ($i + 1)] = $EventIds[$i];
		}
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
	public function getEventPublishTimeEnd() {
		return $this->eventPublishTimeEnd;
	}

	/**
	 * @param $eventPublishTimeEnd
	 */
	public function setEventPublishTimeEnd($eventPublishTimeEnd) {
		$this->eventPublishTimeEnd                     = $eventPublishTimeEnd;
		$this->apiParameters['EventPublishTime.End'] = $eventPublishTimeEnd;
	}

	/**
	 * @return mixed
	 */
	public function getInstanceEventTypes() {
		return $this->InstanceEventTypes;
	}

	/**
	 * @param $InstanceEventTypes
	 */
	public function setInstanceEventTypes($InstanceEventTypes) {
		$this->InstanceEventTypes = $InstanceEventTypes;
		for ($i = 0; $i < count($InstanceEventTypes); $i++) {
			$this->apiParameters['InstanceEventType.' . ($i + 1)] = $InstanceEventTypes[$i];
		}
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
	public function getNotBeforeStart() {
		return $this->notBeforeStart;
	}

	/**
	 * @param $notBeforeStart
	 */
	public function setNotBeforeStart($notBeforeStart) {
		$this->notBeforeStart                     = $notBeforeStart;
		$this->apiParameters['NotBefore.Start'] = $notBeforeStart;
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
	public function getEventPublishTimeStart() {
		return $this->eventPublishTimeStart;
	}

	/**
	 * @param $eventPublishTimeStart
	 */
	public function setEventPublishTimeStart($eventPublishTimeStart) {
		$this->eventPublishTimeStart                     = $eventPublishTimeStart;
		$this->apiParameters['EventPublishTime.Start'] = $eventPublishTimeStart;
	}

	/**
	 * @return mixed
	 */
	public function getInstanceIds() {
		return $this->InstanceIds;
	}

	/**
	 * @param $InstanceIds
	 */
	public function setInstanceIds($InstanceIds) {
		$this->InstanceIds = $InstanceIds;
		for ($i = 0; $i < count($InstanceIds); $i++) {
			$this->apiParameters['InstanceId.' . ($i + 1)] = $InstanceIds[$i];
		}
	}

	/**
	 * @return mixed
	 */
	public function getNotBeforeEnd() {
		return $this->notBeforeEnd;
	}

	/**
	 * @param $notBeforeEnd
	 */
	public function setNotBeforeEnd($notBeforeEnd) {
		$this->notBeforeEnd                     = $notBeforeEnd;
		$this->apiParameters['NotBefore.End'] = $notBeforeEnd;
	}

	/**
	 * @return mixed
	 */
	public function getHealthStatus() {
		return $this->healthStatus;
	}

	/**
	 * @param $healthStatus
	 */
	public function setHealthStatus($healthStatus) {
		$this->healthStatus                    = $healthStatus;
		$this->apiParameters['HealthStatus'] = $healthStatus;
	}

	/**
	 * @return mixed
	 */
	public function getEventType() {
		return $this->eventType;
	}

	/**
	 * @param $eventType
	 */
	public function setEventType($eventType) {
		$this->eventType                    = $eventType;
		$this->apiParameters['EventType'] = $eventType;
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