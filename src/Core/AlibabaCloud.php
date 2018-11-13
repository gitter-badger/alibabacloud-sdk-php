<?php

namespace AlibabaCloud\Core;

use AlibabaCloud\Core\Credentials\Credential;
use AlibabaCloud\Core\Credentials\BearerToken;
use AlibabaCloud\Core\Credentials\AccessKey;
use AlibabaCloud\Core\Credentials\EcsRamRole;
use AlibabaCloud\Core\Credentials\RamRoleArn;
use AlibabaCloud\Core\Exception\ClientException;

/**
 * Class AlibabaCloud
 *
 * @package AlibabaCloud\Core
 */
class AlibabaCloud {

	/**
	 * @var array Containers of Profile
	 */
	private static $clients = [];

	/**
	 * @var string
	 */
	private static $globalRegionId;

	/**
	 * @var Credential
	 */
	private $credential;

	/**
	 * @var string
	 */
	private $regionId = '';

	/**
	 * @param string $globalRegionId
	 */
	public static function setGlobalRegionId($globalRegionId) {
		self::$globalRegionId = $globalRegionId;
	}

	/**
	 * @return string
	 */
	public static function getGlobalRegionId() {
		return self::$globalRegionId;
	}

	/**
	 * @param $regionId
	 *
	 * @return $this
	 */
	public function setRegionId($regionId) {
		$this->regionId = $regionId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRegionId() {
		return $this->regionId;
	}

	/**
	 * @return Credential
	 */
	public function getCredential() {
		return $this->credential;
	}

	/**
	 * AlibabaCloud constructor.
	 *
	 * @param Credential $credential
	 */
	private function __construct(Credential $credential) {
		$this->credential = $credential;
	}

	/**
	 * @param      $accessKeyId
	 * @param      $accessSecret
	 * @param null $securityToken
	 *
	 * @return static
	 */
	public static function accessKeyClient($accessKeyId, $accessSecret, $securityToken = null) {
		return new static(new AccessKey($accessKeyId, $accessSecret, $securityToken));
	}

	/**
	 * @param $bearerToken
	 *
	 * @return static
	 */
	public static function bearerTokenClient($bearerToken) {
		return new static(new BearerToken($bearerToken));
	}

	/**
	 * @param $roleName
	 *
	 * @return static
	 */
	public static function ecsRamRoleClient($roleName) {
		return new static(new EcsRamRole($roleName));
	}

	/**
	 * Aliyun Resource Name
	 *
	 * @param $accessKeyId
	 * @param $accessSecret
	 * @param $roleArn
	 * @param $roleSessionName
	 *
	 * @return static
	 */
	public static function ramRoleArnClient($accessKeyId, $accessSecret, $roleArn, $roleSessionName) {
		return new static(new RamRoleArn($accessKeyId, $accessSecret, $roleArn, $roleSessionName));
	}

	/**
	 * @param string $path
	 *
	 * @return array
	 */
	public static function loadCredentialsFile($path = __DIR__ . '/../../.alibabacloud/credentials.ini') {
		if (!\is_readable($path)) {
			return [];
		}
		$credentials = parse_ini_file($path, true);
		foreach ($credentials as $project => $credential) {
			if (\is_array($credential) && isset($credential['access_key_id'], $credential['secret_access_key'])) {
				self::$clients[$project] =
					new static(new AccessKey($credential['access_key_id'], $credential['secret_access_key']));
			}
		}
		return self::$clients;
	}

	/**
	 * @param string $name
	 *
	 * @return array|self
	 * @throws ClientException
	 */
	public static function get($name = '') {
		if ($name === '') {
			return self::$clients;
		}
		if (isset(self::$clients[$name]) && self::$clients[$name] instanceof self) {
			return self::$clients[$name];
		}
		throw new ClientException(ALIBABA_CLOUD . 'Client Not Found: ' . $name, 400);
	}

	/**
	 * @param string $name
	 */
	public static function del($name) {
		unset(self::$clients[$name]);
	}

	/**
	 * @param $clientName
	 *
	 * @return AlibabaCloud
	 */
	public function name($clientName) {
		return self::$clients[$clientName] =& $this;
	}

	/**
	 * @return AlibabaCloud
	 */
	public function asDefaultClient() {
		return self::$clients[\ALIBABA_CLOUD_DEFAULT_NAME] =& $this;
	}

}
