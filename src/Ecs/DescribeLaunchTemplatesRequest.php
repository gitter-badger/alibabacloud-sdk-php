<?php

namespace AlibabaCloud\Ecs;

class DescribeLaunchTemplatesRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeLaunchTemplates', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $LaunchTemplateNames;

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
	private $TemplateTags;

	/**
	 * @var
	 */
	private $LaunchTemplateIds;

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
	private $templateResourceGroupId;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @return mixed
	 */
	public function getLaunchTemplateNames() {
		return $this->LaunchTemplateNames;
	}

	/**
	 * @param $LaunchTemplateNames
	 */
	public function setLaunchTemplateNames($LaunchTemplateNames) {
		$this->LaunchTemplateNames = $LaunchTemplateNames;
		for ($i = 0; $i < count($LaunchTemplateNames); $i++) {
			$this->apiParameters['LaunchTemplateName.' . ($i + 1)] = $LaunchTemplateNames[$i];
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
	public function getTemplateTags() {
		return $this->TemplateTags;
	}

	/**
	 * @param $TemplateTags
	 */
	public function setTemplateTags($TemplateTags) {
		$this->TemplateTags = $TemplateTags;
		for ($i = 0; $i < count($TemplateTags); $i++) {
			$this->apiParameters['TemplateTag.' . ($i + 1) . '.Key']   = $TemplateTags[$i]['Key'];
			$this->apiParameters['TemplateTag.' . ($i + 1) . '.Value'] = $TemplateTags[$i]['Value'];
		}
	}

	/**
	 * @return mixed
	 */
	public function getLaunchTemplateIds() {
		return $this->LaunchTemplateIds;
	}

	/**
	 * @param $LaunchTemplateIds
	 */
	public function setLaunchTemplateIds($LaunchTemplateIds) {
		$this->LaunchTemplateIds = $LaunchTemplateIds;
		for ($i = 0; $i < count($LaunchTemplateIds); $i++) {
			$this->apiParameters['LaunchTemplateId.' . ($i + 1)] = $LaunchTemplateIds[$i];
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
	public function getTemplateResourceGroupId() {
		return $this->templateResourceGroupId;
	}

	/**
	 * @param $templateResourceGroupId
	 */
	public function setTemplateResourceGroupId($templateResourceGroupId) {
		$this->templateResourceGroupId                    = $templateResourceGroupId;
		$this->apiParameters['TemplateResourceGroupId'] = $templateResourceGroupId;
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