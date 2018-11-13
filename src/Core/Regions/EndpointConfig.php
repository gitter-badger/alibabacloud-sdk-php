<?php

use AlibabaCloud\Core\Regions\Endpoint;
use AlibabaCloud\Core\Regions\EndpointProvider;
use AlibabaCloud\Core\Regions\ProductDomain;

$endpoint_filename = __DIR__ . DIRECTORY_SEPARATOR . 'endpoints.xml';
$xml               = simplexml_load_string(file_get_contents($endpoint_filename));
$json              = json_encode($xml);
$json_array        = json_decode($json, true);
$endpoints         = [];

foreach ($json_array['Endpoint'] as $json_endpoint) {
	# pre-process RegionId & Product
	if (!array_key_exists('RegionId', $json_endpoint['RegionIds'])) {
		$region_ids = [];
	} else {
		$json_region_ids = $json_endpoint['RegionIds']['RegionId'];
		if (!is_array($json_region_ids)) {
			$region_ids = [$json_region_ids];
		} else {
			$region_ids = $json_region_ids;
		}
	}

	if (!array_key_exists('Product', $json_endpoint['Products'])) {
		$products = [];
	} else {
		$json_products = $json_endpoint['Products']['Product'];

		if ([] === $json_products or !is_array($json_products)) {
			$products = [];
		} else if (array_keys($json_products) !== range(0, count($json_products) - 1)) {
			# array is not sequential
			$products = [$json_products];
		} else {
			$products = $json_products;
		}
	}

	$product_domains = [];
	foreach ($products as $product) {
		$product_domain    = new ProductDomain($product['ProductName'], $product['DomainName']);
		$product_domains[] = $product_domain;
	}

	$endpoint    = new Endpoint($region_ids[0], $region_ids, $product_domains);
	$endpoints[] = $endpoint;
}

EndpointProvider::setEndpoints($endpoints);
