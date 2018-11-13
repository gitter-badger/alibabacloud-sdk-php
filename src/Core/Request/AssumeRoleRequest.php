<?php

namespace AlibabaCloud\Core\Auth;

use AlibabaCloud\Core\Request\RpcRequest;

/**
 * Class AssumeRoleRequest
 *
 * @package AlibabaCloud\Core\Auth
 */
class AssumeRoleRequest extends RpcRequest {

	/**
	 * AssumeRoleRequest constructor.
	 *
	 * @param $roleArn
	 * @param $roleSessionName
	 *
	 * @throws \AlibabaCloud\Core\Exception\ClientException
	 */
	public function __construct($roleArn, $roleSessionName) {
		parent::__construct(STS_PRODUCT_NAME, STS_VERSION, STS_ACTION);
		$this->apiParameters['RoleArn']         = $roleArn;
		$this->apiParameters['RoleSessionName'] = $roleSessionName;
		$this->apiParameters['DurationSeconds'] = ROLE_ARN_EXPIRE_TIME;
		$this->setRegionId(ROLE_ARN_EXPIRE_TIME);
		$this->protocol('https');
	}
}

