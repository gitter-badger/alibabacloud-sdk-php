<?php

namespace AlibabaCloud\Ecs;

class ApplyAutoSnapshotPolicyRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ApplyAutoSnapshotPolicy', 'ecs', 'openAPI');
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
	private $diskIds;

	/**
	 * @var
	 */
	private $ownerId;

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
	public function getdiskIds() {
		return $this->diskIds;
	}

	/**
	 * @param $diskIds
	 */
	public function setdiskIds($diskIds) {
		$this->diskIds                    = $diskIds;
		$this->apiParameters['diskIds'] = $diskIds;
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

}