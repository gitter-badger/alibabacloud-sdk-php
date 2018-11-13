<?php

namespace AlibabaCloud\Core\DocComment;

use ReflectionClass;
use ReflectionProperty;
use Stringy\Stringy as S;

/**
 * Class Parameters
 *
 * @package AlibabaCloud\Core\DocComment
 */
class Parameters {

	/**
	 * @param object $object
	 * @param string $needle
	 *
	 * @return array
	 * @throws \ReflectionException
	 */
	public static function getParameters($object, $needle = '@api') {
		$parameters = [];
		$reflection = new ReflectionClass($object);
		foreach ($reflection->getProperties() as $property) {
			if (\strpos($property->getDocComment(), $needle) !== false) {
				$propertyName  = $property->getName();
				$parameterName = self::getParameterName($property, $needle);
				if (!$parameterName) {
					$parameterName = (string)S::create($propertyName)->upperCaseFirst();
				}
				if ($object->$propertyName !== null) {
					$parameters[$parameterName] = $object->$propertyName;
				}
			}
		}
		return $parameters;
	}

	/**
	 * @param ReflectionProperty $property
	 * @param string             $start
	 * @param string             $end
	 *
	 * @return string
	 */
	private static function getParameterName(ReflectionProperty $property,
											 $start = '@api',
											 $end = \PHP_EOL) {
		return (string)S::create($property->getDocComment())->between($start . ' ', $end);
	}

}