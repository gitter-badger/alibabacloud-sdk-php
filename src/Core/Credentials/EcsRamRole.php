<?php

namespace AlibabaCloud\Core\Credentials;

/**
 * Class EcsRamRoleCredential
 *
 * @package AlibabaCloud\Core\Auth
 */
class EcsRamRole extends Credential {

	/**
	 * @var
	 */
	private $roleName;

	/**
	 * EcsRamRoleCredential constructor.
	 *
	 * @param $roleName
	 */
	public function __construct($roleName) {
		$this->roleName = $roleName;
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
	public function getRoleName() {
		return $this->roleName;
	}

	/**
	 * @param $roleName
	 */
	public function setRoleName($roleName) {
		$this->roleName = $roleName;
	}

	/**
	 * @return null
	 */
	public function getSecurityToken() {
		return null;
	}
}