<?php

namespace AlibabaCloud\Core\Credentials;

/**
 * Class AbstractCredential
 *
 * @package AlibabaCloud\Core\Credentials
 */
abstract class Credential {

	/**
	 * @return string
	 */
	abstract public function getAccessKeyId();

	/**
	 * @return string
	 */
	abstract public function getAccessSecret();

	/**
	 * @return string
	 */
	abstract public function getSecurityToken();
}