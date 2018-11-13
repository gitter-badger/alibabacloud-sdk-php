<?php

namespace AlibabaCloud\Ecs;

class DescribeDisksFullStatusRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeDisksFullStatus', 'ecs', 'openAPI');
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
	private $eventTimeStart;

	/**
	 * @var
	 */
	private $pageSize;

	/**
	 * @var
	 */
	private $DiskIds;

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
	private $eventTimeEnd;

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
	public function getEventTimeStart() {
		return $this->eventTimeStart;
	}

	/**
	 * @param $eventTimeStart
	 */
	public function setEventTimeStart($eventTimeStart) {
		$this->eventTimeStart                     = $eventTimeStart;
		$this->apiParameters['EventTime.Start'] = $eventTimeStart;
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
	public function getDiskIds() {
		return $this->DiskIds;
	}

	/**
	 * @param $DiskIds
	 */
	public function setDiskIds($DiskIds) {
		$this->DiskIds = $DiskIds;
		for ($i = 0; $i < count($DiskIds); $i++) {
			$this->apiParameters['DiskId.' . ($i + 1)] = $DiskIds[$i];
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
	public function getEventTimeEnd() {
		return $this->eventTimeEnd;
	}

	/**
	 * @param $eventTimeEnd
	 */
	public function setEventTimeEnd($eventTimeEnd) {
		$this->eventTimeEnd                     = $eventTimeEnd;
		$this->apiParameters['EventTime.End'] = $eventTimeEnd;
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