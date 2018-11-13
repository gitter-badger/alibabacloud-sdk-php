<?php

namespace AlibabaCloud\Ecs;

class DeleteLaunchTemplateVersionRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DeleteLaunchTemplateVersion', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $launchTemplateName;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $DeleteVersions;

	/**
	 * @var
	 */
	private $launchTemplateId;

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
	 * @return mixed
	 */
	public function getLaunchTemplateName() {
		return $this->launchTemplateName;
	}

	/**
	 * @param $launchTemplateName
	 */
	public function setLaunchTemplateName($launchTemplateName) {
		$this->launchTemplateName                    = $launchTemplateName;
		$this->apiParameters['LaunchTemplateName'] = $launchTemplateName;
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
	public function getDeleteVersions() {
		return $this->DeleteVersions;
	}

	/**
	 * @param $DeleteVersions
	 */
	public function setDeleteVersions($DeleteVersions) {
		$this->DeleteVersions = $DeleteVersions;
		for ($i = 0; $i < count($DeleteVersions); $i++) {
			$this->apiParameters['DeleteVersion.' . ($i + 1)] = $DeleteVersions[$i];
		}
	}

	/**
	 * @return mixed
	 */
	public function getLaunchTemplateId() {
		return $this->launchTemplateId;
	}

	/**
	 * @param $launchTemplateId
	 */
	public function setLaunchTemplateId($launchTemplateId) {
		$this->launchTemplateId                    = $launchTemplateId;
		$this->apiParameters['LaunchTemplateId'] = $launchTemplateId;
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

}