<?php

namespace AlibabaCloud\Core\Exception;

/**
 * Class ServerException
 *
 * @package AlibabaCloud\Core\Exception
 */
class ServerException extends ClientException {

	/**
	 * @var int Http Status Code
	 */
	private $httpStatus;
	/**
	 * @var string Request ID
	 */
	private $requestId;

	/**
	 * ServerException constructor.
	 *
	 * @param string $errorMessage
	 * @param int    $errorCode
	 * @param int    $httpStatus
	 * @param string $requestId
	 */
	public function __construct($errorMessage, $errorCode, $httpStatus, $requestId) {
		$message = $errorCode . ' ' . $errorMessage . ' HTTP Status: ' . $httpStatus . ' RequestID: ' . $requestId;
		parent::__construct($message, $errorCode);
		$this->setErrorMessage($errorMessage);
		$this->setErrorType('Server');
		$this->httpStatus = $httpStatus;
		$this->requestId  = $requestId;
	}

	/**
	 * @return mixed
	 */
	public function getHttpStatus() {
		return $this->httpStatus;
	}

	/**
	 * @return mixed
	 */
	public function getRequestId() {
		return $this->requestId;
	}
}
