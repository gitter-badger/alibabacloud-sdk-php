<?php

namespace AlibabaCloud\Core\Credentials;

/**
 * Only Support Japanese Station
 * Class RsaKeyPair
 *
 * @package AlibabaCloud\Core\Credentials
 */
class RsaKeyPair extends Credential {

	/**
	 * @var
	 */
	private $bearerToken;

	/**
	 * BearerTokenCredential constructor.
	 *
	 * @param $bearerToken
	 */
	public function __construct($bearerToken) {
		$this->bearerToken = $bearerToken;
	}

	/**
	 * @return null
	 */
	public function getAccessKeyId() {
		return null;
	}

	/**
	 * @return null
	 */
	public function getAccessSecret() {
		return null;
	}

	/**
	 * @return mixed
	 */
	public function getBearerToken() {
		return $this->bearerToken;
	}

	/**
	 * @param $bearerToken
	 */
	public function setBearerToken($bearerToken) {
		$this->bearerToken = $bearerToken;
	}

	/**
	 * @return null
	 */
	public function getSecurityToken() {
		return null;
	}
}