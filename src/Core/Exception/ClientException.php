<?php

namespace AlibabaCloud\Core\Exception;

/**
 * Class ClientException
 *
 * @package AlibabaCloud\Core\Exception
 */
class ClientException extends \Exception {

	/**
	 * ClientException constructor.
	 *
	 * @param $errorMessage
	 * @param $errorCode
	 */
	public function __construct($errorMessage, $errorCode) {
		parent::__construct($errorMessage);
		$this->errorMessage = $errorMessage;
		$this->errorCode    = $errorCode;
		$this->setErrorType('Client');
	}

	/**
	 * @var
	 */
	private $errorCode;
	/**
	 * @var
	 */
	private $errorMessage;
	/**
	 * @var
	 */
	private $errorType;

	/**
	 * @return mixed
	 */
	public function getErrorCode() {
		return $this->errorCode;
	}

	/**
	 * @param $errorCode
	 */
	public function setErrorCode($errorCode) {
		$this->errorCode = $errorCode;
	}

	/**
	 * @return mixed
	 */
	public function getErrorMessage() {
		return $this->errorMessage;
	}

	/**
	 * @param $errorMessage
	 */
	public function setErrorMessage($errorMessage) {
		$this->errorMessage = $errorMessage;
	}

	/**
	 * @return mixed
	 */
	public function getErrorType() {
		return $this->errorType;
	}

	/**
	 * @param $errorType
	 */
	public function setErrorType($errorType) {
		$this->errorType = $errorType;
	}
}
