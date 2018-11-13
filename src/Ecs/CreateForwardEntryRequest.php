<?php

namespace AlibabaCloud\Ecs;

class CreateForwardEntryRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'CreateForwardEntry', 'ecs', 'openAPI');
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
	private $ipProtocol;

	/**
	 * @var
	 */
	private $internalPort;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $forwardTableId;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $externalIp;

	/**
	 * @var
	 */
	private $externalPort;

	/**
	 * @var
	 */
	private $internalIp;

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
	public function getIpProtocol() {
		return $this->ipProtocol;
	}

	/**
	 * @param $ipProtocol
	 */
	public function setIpProtocol($ipProtocol) {
		$this->ipProtocol                    = $ipProtocol;
		$this->apiParameters['IpProtocol'] = $ipProtocol;
	}

	/**
	 * @return mixed
	 */
	public function getInternalPort() {
		return $this->internalPort;
	}

	/**
	 * @param $internalPort
	 */
	public function setInternalPort($internalPort) {
		$this->internalPort                    = $internalPort;
		$this->apiParameters['InternalPort'] = $internalPort;
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
	public function getForwardTableId() {
		return $this->forwardTableId;
	}

	/**
	 * @param $forwardTableId
	 */
	public function setForwardTableId($forwardTableId) {
		$this->forwardTableId                    = $forwardTableId;
		$this->apiParameters['ForwardTableId'] = $forwardTableId;
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
	public function getExternalIp() {
		return $this->externalIp;
	}

	/**
	 * @param $externalIp
	 */
	public function setExternalIp($externalIp) {
		$this->externalIp                    = $externalIp;
		$this->apiParameters['ExternalIp'] = $externalIp;
	}

	/**
	 * @return mixed
	 */
	public function getExternalPort() {
		return $this->externalPort;
	}

	/**
	 * @param $externalPort
	 */
	public function setExternalPort($externalPort) {
		$this->externalPort                    = $externalPort;
		$this->apiParameters['ExternalPort'] = $externalPort;
	}

	/**
	 * @return mixed
	 */
	public function getInternalIp() {
		return $this->internalIp;
	}

	/**
	 * @param $internalIp
	 */
	public function setInternalIp($internalIp) {
		$this->internalIp                    = $internalIp;
		$this->apiParameters['InternalIp'] = $internalIp;
	}

}