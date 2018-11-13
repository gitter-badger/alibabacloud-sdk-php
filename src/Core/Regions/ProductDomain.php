<?php

namespace AlibabaCloud\Core\Regions;

/**
 * Class ProductDomain
 *
 * @package AlibabaCloud\Core\Regions
 */
class ProductDomain {

	/**
	 * @var
	 */
	private $productName;
	/**
	 * @var
	 */
	private $domainName;

	/**
	 * ProductDomain constructor.
	 *
	 * @param $product
	 * @param $domain
	 */
	public function __construct($product, $domain) {
		$this->productName = $product;
		$this->domainName  = $domain;
	}

	public function getProductName() {
		return $this->productName;
	}

	/**
	 * @param $productName
	 */
	public function setProductName($productName) {
		$this->productName = $productName;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	/**
	 * @param $domainName
	 */
	public function setDomainName($domainName) {
		$this->domainName = $domainName;
	}
}
