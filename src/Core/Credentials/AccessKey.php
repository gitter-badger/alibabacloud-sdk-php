<?php

namespace AlibabaCloud\Core\Credentials;

/**
 * 使用AccessKey ID和AccessKey Secret访问
 * Class Credential
 *
 * @package AlibabaCloud\Core\Auth
 */
class AccessKey extends Credential {

	/**
	 * @var string
	 */
	private $dateTimeFormat = 'Y-m-d\TH:i:s\Z';
	/**
	 * @var false|string
	 */
	private $refreshDate;
	/**
	 * @var
	 */
	private $expiredDate;
	/**
	 * @var
	 */
	private $accessKeyId;
	/**
	 * @var
	 */
	private $accessSecret;
	/**
	 * @var
	 */
	private $securityToken;

	/**
	 * Credential constructor.
	 *
	 * @param $accessKeyId
	 * @param $accessSecret
	 * @param $securityToken
	 */
	public function __construct($accessKeyId, $accessSecret, $securityToken = '') {
		$this->accessKeyId   = $accessKeyId;
		$this->accessSecret  = $accessSecret;
		$this->securityToken = $securityToken;
		$this->refreshDate   = date($this->dateTimeFormat);
	}

	/**
	 * @return bool
	 */
	public function isExpired() {
		if ($this->expiredDate === null) {
			return false;
		}
		if (strtotime($this->expiredDate) > strtotime(date($this->dateTimeFormat))) {
			return false;
		}
		return true;
	}

	/**
	 * @return false|string
	 */
	public function getRefreshDate() {
		return $this->refreshDate;
	}

	/**
	 * @return mixed
	 */
	public function getExpiredDate() {
		return $this->expiredDate;
	}

	/**
	 * @param $expiredHours
	 *
	 * @return false|string
	 */
	public function setExpiredDate($expiredHours) {
		if ($expiredHours > 0) {
			return $this->expiredDate = date($this->dateTimeFormat, strtotime('+' . $expiredHours . ' hour'));
		}
	}

	/**
	 * @return mixed
	 */
	public function getAccessKeyId() {
		return $this->accessKeyId;
	}

	/**
	 * @param $accessKeyId
	 */
	public function setAccessKeyId($accessKeyId) {
		$this->accessKeyId = $accessKeyId;
	}

	/**
	 * @return mixed
	 */
	public function getAccessSecret() {
		return $this->accessSecret;
	}

	/**
	 * @param $accessSecret
	 */
	public function setAccessSecret($accessSecret) {
		$this->accessSecret = $accessSecret;
	}

	/**
	 * @return mixed
	 */
	public function getSecurityToken() {
		return $this->securityToken;
	}

	/**
	 * @param $securityToken
	 */
	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
	}
}
