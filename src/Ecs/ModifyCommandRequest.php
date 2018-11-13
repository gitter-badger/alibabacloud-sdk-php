<?php

namespace AlibabaCloud\Ecs;

class ModifyCommandRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ModifyCommand', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $workingDir;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $commandId;

	/**
	 * @var
	 */
	private $commandContent;

	/**
	 * @var
	 */
	private $timeout;

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
	private $name;

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
	public function getWorkingDir() {
		return $this->workingDir;
	}

	/**
	 * @param $workingDir
	 */
	public function setWorkingDir($workingDir) {
		$this->workingDir                    = $workingDir;
		$this->apiParameters['WorkingDir'] = $workingDir;
	}

	/**
	 * @return mixed
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param $description
	 */
	public function setDescription($description) {
		$this->description                    = $description;
		$this->apiParameters['Description'] = $description;
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
	public function getCommandContent() {
		return $this->commandContent;
	}

	/**
	 * @param $commandContent
	 */
	public function setCommandContent($commandContent) {
		$this->commandContent                    = $commandContent;
		$this->apiParameters['CommandContent'] = $commandContent;
	}

	/**
	 * @return mixed
	 */
	public function getTimeout() {
		return $this->timeout;
	}

	/**
	 * @param $timeout
	 */
	public function setTimeout($timeout) {
		$this->timeout                    = $timeout;
		$this->apiParameters['Timeout'] = $timeout;
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
	public function getName() {
		return $this->name;
	}

	/**
	 * @param $name
	 */
	public function setName($name) {
		$this->name                    = $name;
		$this->apiParameters['Name'] = $name;
	}

}