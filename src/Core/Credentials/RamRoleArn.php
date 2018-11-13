<?php

namespace AlibabaCloud\Core\Credentials;

/**
 * Class RamRoleArnCredential
 *
 * @package AlibabaCloud\Core\Auth
 */
class RamRoleArn extends Credential {

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
	private $roleArn;
	/**
	 * @var
	 */
	private $roleSessionName;

	/**
	 * RamRoleArnCredential constructor.
	 *
	 * @param $accessKeyId
	 * @param $accessSecret
	 * @param $roleArn
	 * @param $roleSessionName
	 */
	public function __construct($accessKeyId, $accessSecret, $roleArn, $roleSessionName) {
		$this->accessKeyId     = $accessKeyId;
		$this->accessSecret    = $accessSecret;
		$this->roleArn         = $roleArn;
		$this->roleSessionName = $roleSessionName;
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
	public function getRoleArn() {
		return $this->roleArn;
	}

	/**
	 * @param $roleArn
	 */
	public function setRoleArn($roleArn) {
		$this->roleArn = $roleArn;
	}

	/**
	 * @return mixed
	 */
	public function getRoleSessionName() {
		return $this->roleSessionName;
	}

	/**
	 * @param $roleSessionName
	 */
	public function setRoleSessionName($roleSessionName) {
		$this->roleSessionName = $roleSessionName;
	}

	/**
	 * @return null
	 */
	public function getSecurityToken() {
		return null;
	}
}