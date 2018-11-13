<?php

namespace AlibabaCloud\Ecs;

class EipFillParamsRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'EipFillParams', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $data;

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
	private $userCidr;

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
	public function getdata() {
		return $this->data;
	}

	/**
	 * @param $data
	 */
	public function setdata($data) {
		$this->data                    = $data;
		$this->apiParameters['data'] = $data;
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
	public function getUserCidr() {
		return $this->userCidr;
	}

	/**
	 * @param $userCidr
	 */
	public function setUserCidr($userCidr) {
		$this->userCidr                    = $userCidr;
		$this->apiParameters['UserCidr'] = $userCidr;
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