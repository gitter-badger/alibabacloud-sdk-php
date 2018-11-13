<?php

namespace AlibabaCloud\Core\Regions;

/**
 * Class Endpoint
 *
 * @package AlibabaCloud\Core\Regions
 */
class Endpoint {

	/**
	 * @var
	 */
	private $name;
	/**
	 * @var
	 */
	private $regionIds;
	/**
	 * @var
	 */
	private $productDomains;

	/**
	 * Endpoint constructor.
	 *
	 * @param $name
	 * @param $regionIds
	 * @param $productDomains
	 */
	public function __construct($name, $regionIds, $productDomains) {
		$this->name           = $name;
		$this->regionIds      = $regionIds;
		$this->productDomains = $productDomains;
	}

	public function getName() {
		return $this->name;
	}

	/**
	 * @param $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	public function getRegionIds() {
		return $this->regionIds;
	}

	/**
	 * @param $regionIds
	 */
	public function setRegionIds($regionIds) {
		$this->regionIds = $regionIds;
	}

	public function getProductDomains() {
		return $this->productDomains;
	}

	/**
	 * @param $productDomains
	 */
	public function setProductDomains($productDomains) {
		$this->productDomains = $productDomains;
	}

}
