<?php

namespace AlibabaCloud\Ecs;

class CopyImageRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'CopyImage', 'ecs', 'openAPI');
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
	private $encrypted;

	/**
	 * @var
	 */
	private $resourceOwnerAccount;

	/**
	 * @var
	 */
	private $destinationImageName;

	/**
	 * @var
	 */
	private $destinationRegionId;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $Tags;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $destinationDescription;

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
	public function getEncrypted() {
		return $this->encrypted;
	}

	/**
	 * @param $encrypted
	 */
	public function setEncrypted($encrypted) {
		$this->encrypted                    = $encrypted;
		$this->apiParameters['Encrypted'] = $encrypted;
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
	public function getDestinationImageName() {
		return $this->destinationImageName;
	}

	/**
	 * @param $destinationImageName
	 */
	public function setDestinationImageName($destinationImageName) {
		$this->destinationImageName                    = $destinationImageName;
		$this->apiParameters['DestinationImageName'] = $destinationImageName;
	}

	/**
	 * @return mixed
	 */
	public function getDestinationRegionId() {
		return $this->destinationRegionId;
	}

	/**
	 * @param $destinationRegionId
	 */
	public function setDestinationRegionId($destinationRegionId) {
		$this->destinationRegionId                    = $destinationRegionId;
		$this->apiParameters['DestinationRegionId'] = $destinationRegionId;
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
	public function getTags() {
		return $this->Tags;
	}

	/**
	 * @param $Tags
	 */
	public function setTags($Tags) {
		$this->Tags = $Tags;
		for ($i = 0; $i < count($Tags); $i++) {
			$this->apiParameters['Tag.' . ($i + 1) . '.Value'] = $Tags[$i]['Value'];
			$this->apiParameters['Tag.' . ($i + 1) . '.Key']   = $Tags[$i]['Key'];
		}
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
	public function getDestinationDescription() {
		return $this->destinationDescription;
	}

	/**
	 * @param $destinationDescription
	 */
	public function setDestinationDescription($destinationDescription) {
		$this->destinationDescription                    = $destinationDescription;
		$this->apiParameters['DestinationDescription'] = $destinationDescription;
	}

}