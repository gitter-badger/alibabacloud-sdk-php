<?php

namespace AlibabaCloud\Ecs;

class ExportImageRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'ExportImage', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $resourceOwnerId;

	/**
	 * @var
	 */
	private $imageId;

	/**
	 * @var
	 */
	private $oSSBucket;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $oSSPrefix;

	/**
	 * @var
	 */
	private $roleName;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $imageFormat;

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
	public function getImageId() {
		return $this->imageId;
	}

	/**
	 * @param $imageId
	 */
	public function setImageId($imageId) {
		$this->imageId                    = $imageId;
		$this->apiParameters['ImageId'] = $imageId;
	}

	/**
	 * @return mixed
	 */
	public function getOSSBucket() {
		return $this->oSSBucket;
	}

	/**
	 * @param $oSSBucket
	 */
	public function setOSSBucket($oSSBucket) {
		$this->oSSBucket                    = $oSSBucket;
		$this->apiParameters['OSSBucket'] = $oSSBucket;
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
	public function getOSSPrefix() {
		return $this->oSSPrefix;
	}

	/**
	 * @param $oSSPrefix
	 */
	public function setOSSPrefix($oSSPrefix) {
		$this->oSSPrefix                    = $oSSPrefix;
		$this->apiParameters['OSSPrefix'] = $oSSPrefix;
	}

	/**
	 * @return mixed
	 */
	public function getRoleName() {
		return $this->roleName;
	}

	/**
	 * @param $roleName
	 */
	public function setRoleName($roleName) {
		$this->roleName                    = $roleName;
		$this->apiParameters['RoleName'] = $roleName;
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
	public function getImageFormat() {
		return $this->imageFormat;
	}

	/**
	 * @param $imageFormat
	 */
	public function setImageFormat($imageFormat) {
		$this->imageFormat                    = $imageFormat;
		$this->apiParameters['ImageFormat'] = $imageFormat;
	}

}