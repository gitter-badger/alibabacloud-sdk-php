<?php

namespace AlibabaCloud\Ecs;

class ModifyAutoSnapshotPolicyExRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyAutoSnapshotPolicyEx', 'ecs', 'openAPI');
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
	private $autoSnapshotPolicyId;

	/**
	 * @var
	 */
	private $timePoints;

	/**
	 * @var
	 */
	private $retentionDays;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $repeatWeekdays;

	/**
	 * @var
	 */
	private $autoSnapshotPolicyName;

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
	public function getautoSnapshotPolicyId() {
		return $this->autoSnapshotPolicyId;
	}

	/**
	 * @param $autoSnapshotPolicyId
	 */
	public function setautoSnapshotPolicyId($autoSnapshotPolicyId) {
		$this->autoSnapshotPolicyId                    = $autoSnapshotPolicyId;
		$this->apiParameters['autoSnapshotPolicyId'] = $autoSnapshotPolicyId;
	}

	/**
	 * @return mixed
	 */
	public function gettimePoints() {
		return $this->timePoints;
	}

	/**
	 * @param $timePoints
	 */
	public function settimePoints($timePoints) {
		$this->timePoints                    = $timePoints;
		$this->apiParameters['timePoints'] = $timePoints;
	}

	/**
	 * @return mixed
	 */
	public function getretentionDays() {
		return $this->retentionDays;
	}

	/**
	 * @param $retentionDays
	 */
	public function setretentionDays($retentionDays) {
		$this->retentionDays                    = $retentionDays;
		$this->apiParameters['retentionDays'] = $retentionDays;
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
	public function getrepeatWeekdays() {
		return $this->repeatWeekdays;
	}

	/**
	 * @param $repeatWeekdays
	 */
	public function setrepeatWeekdays($repeatWeekdays) {
		$this->repeatWeekdays                    = $repeatWeekdays;
		$this->apiParameters['repeatWeekdays'] = $repeatWeekdays;
	}

	/**
	 * @return mixed
	 */
	public function getautoSnapshotPolicyName() {
		return $this->autoSnapshotPolicyName;
	}

	/**
	 * @param $autoSnapshotPolicyName
	 */
	public function setautoSnapshotPolicyName($autoSnapshotPolicyName) {
		$this->autoSnapshotPolicyName                    = $autoSnapshotPolicyName;
		$this->apiParameters['autoSnapshotPolicyName'] = $autoSnapshotPolicyName;
	}

}