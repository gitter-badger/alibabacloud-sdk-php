<?php

namespace AlibabaCloud\Ecs;

class CreateNatGatewayRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'CreateNatGateway', 'ecs', 'openAPI');
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
	private $clientToken;

	/**
	 * @var
	 */
	private $ownerAccount;

	/**
	 * @var
	 */
	private $vpcId;

	/**
	 * @var
	 */
	private $name;

	/**
	 * @var
	 */
	private $description;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $BandwidthPackages;

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
	public function getVpcId() {
		return $this->vpcId;
	}

	/**
	 * @param $vpcId
	 */
	public function setVpcId($vpcId) {
		$this->vpcId                    = $vpcId;
		$this->apiParameters['VpcId'] = $vpcId;
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
	public function getBandwidthPackages() {
		return $this->BandwidthPackages;
	}

	/**
	 * @param $BandwidthPackages
	 */
	public function setBandwidthPackages($BandwidthPackages) {
		$this->BandwidthPackages = $BandwidthPackages;
		for ($i = 0; $i < count($BandwidthPackages); $i++) {
			$this->apiParameters['BandwidthPackage.' . ($i + 1) . '.Bandwidth'] = $BandwidthPackages[$i]['Bandwidth'];
			$this->apiParameters['BandwidthPackage.' . ($i + 1) . '.Zone']      = $BandwidthPackages[$i]['Zone'];
			$this->apiParameters['BandwidthPackage.' . ($i + 1) . '.IpCount']   = $BandwidthPackages[$i]['IpCount'];
		}
	}

}