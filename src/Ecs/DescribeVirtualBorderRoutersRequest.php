<?php

namespace AlibabaCloud\Ecs;

class DescribeVirtualBorderRoutersRequest extends \AlibabaCloud\Core\RpcRequest {

	public function __construct() {
		parent::__construct('Ecs', '2014-05-26', 'DescribeVirtualBorderRouters', 'ecs', 'openAPI');
		$this->setMethod('POST');
	}

	/**
	 * @var
	 */
	private $Filters;

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
	private $pageSize;

	/**
	 * @var
	 */
	private $ownerId;

	/**
	 * @var
	 */
	private $pageNumber;

	/**
	 * @return mixed
	 */
	public function getFilters() {
		return $this->Filters;
	}

	/**
	 * @param $Filters
	 */
	public function setFilters($Filters) {
		$this->Filters = $Filters;
		for ($i = 0; $i < count($Filters); $i++) {
			for ($j = 0; $j < count($Filters[$i]['Values']); $j++) {
				$this->apiParameters['Filter.' . ($i + 1) . '.Value.' . ($j + 1)] = $Filters[$i]['Values'][$j];
			}
			$this->apiParameters['Filter.' . ($i + 1) . '.Key'] = $Filters[$i]['Key'];
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

}