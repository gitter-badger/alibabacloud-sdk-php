<?php

namespace AlibabaCloud\Oss;

use AlibabaCloud\Core\Exception\ClientException;
use OSS\Core\OssException;
use OSS\OssClient;

/**
 * Class Oss
 *
 * @package AlibabaCloud\Oss
 * @method static client()
 */
class Oss {

	/**
	 * @return OssClient
	 * @throws ClientException
	 */
	private static function getClient() {

		$accessKeyId     = \getenv('OSS_ACCESS_KEY_ID');
		$accessKeySecret = \getenv('OSS_SECRET_ACCESS_KEY');
		// Endpoint以杭州为例，其它Region请按实际情况填写。
		$endpoint = 'http://oss-cn-qingdao.aliyuncs.com';

		try {
			$ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
		} catch (OssException $exception) {
			throw new ClientException($exception->getErrorMessage(), $exception->getCode());
		}
		return $ossClient;
	}

	public static function listBuckets() {
		try {
			$response = self::getClient()->listBuckets();
			\dump($response);
		} catch (ClientException $exception) {
			\dump($exception);
		} catch (OssException $exception) {
			\dump($exception);
		}
	}
}