<?php

namespace AlibabaCloud\Core\Config;

use clagiordano\weblibs\configmanager\ConfigManager;

/**
 * Class AlibabaCloudConfig
 *
 * @package AlibabaCloud\Core\Config
 */
class AlibabaCloudConfig {

	/**
	 * @var array
	 */
	private static $config;

	/**
	 * @param $configPath
	 *
	 * @return mixed
	 */
	public static function get($configPath) {
		if (null === self::$config) {
			self::$config = new ConfigManager(__DIR__ . '/config.php');
		}
		return self::$config->getValue(\strtolower($configPath));
	}

	/**
	 * @param string $configPath
	 * @param mixed  $newValue
	 */
	public static function set($configPath, $newValue) {
		$config = new ConfigManager(__DIR__ . '/config.php');
		$config->setValue(\strtolower($configPath), $newValue);
		$config->saveConfigFile();
	}

}