<?php

namespace AlibabaCloud\Ecs;

class DescribeLaunchTemplateVersionsRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeLaunchTemplateVersions', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $launchTemplateName;

	/**
	 * @var
	 */
	private $maxVersion;

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $defaultVersion;

	/**
	 * @var
	 */
	private $minVersion;

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
	 * @var
	 */
	private $LaunchTemplateVersions;

	/**
	 * @var
	 */
	private $detailFlag;

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
	public function getMaxVersion() {
		return $this->maxVersion;
	}

	/**
	 * @param $maxVersion
	 */
	public function setMaxVersion($maxVersion) {
		$this->maxVersion                    = $maxVersion;
		$this->apiParameters['MaxVersion'] = $maxVersion;
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
	public function getDefaultVersion() {
		return $this->defaultVersion;
	}

	/**
	 * @param $defaultVersion
	 */
	public function setDefaultVersion($defaultVersion) {
		$this->defaultVersion                    = $defaultVersion;
		$this->apiParameters['DefaultVersion'] = $defaultVersion;
	}

	/**
	 * @return mixed
	 */
	public function getMinVersion() {
		return $this->minVersion;
	}

	/**
	 * @param $minVersion
	 */
	public function setMinVersion($minVersion) {
		$this->minVersion                    = $minVersion;
		$this->apiParameters['MinVersion'] = $minVersion;
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

	/**
	 * @return mixed
	 */
	public function getLaunchTemplateVersions() {
		return $this->LaunchTemplateVersions;
	}

	/**
	 * @param $LaunchTemplateVersions
	 */
	public function setLaunchTemplateVersions($LaunchTemplateVersions) {
		$this->LaunchTemplateVersions = $LaunchTemplateVersions;
		for ($i = 0; $i < count($LaunchTemplateVersions); $i++) {
			$this->apiParameters['LaunchTemplateVersion.' . ($i + 1)] = $LaunchTemplateVersions[$i];
		}
	}

	/**
	 * @return mixed
	 */
	public function getDetailFlag() {
		return $this->detailFlag;
	}

	/**
	 * @param $detailFlag
	 */
	public function setDetailFlag($detailFlag) {
		$this->detailFlag                    = $detailFlag;
		$this->apiParameters['DetailFlag'] = $detailFlag;
	}

}