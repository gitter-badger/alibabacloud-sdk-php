<?php

namespace AlibabaCloud\Ecs;

use AlibabaCloud\Core\Exception\ClientException;
use AlibabaCloud\Core\Request\Request;
use AlibabaCloud\Core\Result\Result;

/**
 * Class Ecs
 *
 * @method static DescribeRegionsRequest|Result DescribeRegions(array $args = [])
 *
 * @method static DescribeInstancesRequest DescribeInstances(array $args = [])
 * @package AlibabaCloud\Ecs
 */
class Ecs {

	/**
	 * @param $function
	 * @param $parameters
	 *
	 * @return Request|Result
	 * @throws ClientException
	 */
	public static function __callStatic($function, $parameters) {
		/**
		 * @var $class Request
		 */
		$class = __NAMESPACE__ . '\\' . $function . 'Request';
		if (!\class_exists($class)) {
			throw  new ClientException('Class Not Found: ' . $class, 0);
		}
		$class = new $class(...$parameters);
		$class->setAction($function);
		$class->setRegionId($class->getRegionId() ?: $class->getClient()->getRegionId());
		$class->setServiceCode(\strtolower(\str_replace(__NAMESPACE__ . '\\', '', __CLASS__)));

		return $class;
	}

}