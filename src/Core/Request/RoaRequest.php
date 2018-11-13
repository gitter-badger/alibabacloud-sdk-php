<?php

namespace AlibabaCloud\Core\Request;

/**
 * Class RoaRequest
 *
 * @package AlibabaCloud\Core\Request
 */
abstract class RoaRequest extends Request {

	/**
	 * @var string
	 */
	protected $method = 'RAW';
	/**
	 * @var
	 */
	protected $uriPattern;
	/**
	 * @var array
	 */
	private $pathParameters = [];

	/**
	 * @var string
	 */
	private $dateTimeFormat = "D, d M Y H:i:s \G\M\T";
	/**
	 * @var string
	 */
	private static $headerSeparator = "\n";
	/**
	 * @var string
	 */
	private static $querySeparator = '&';

}
