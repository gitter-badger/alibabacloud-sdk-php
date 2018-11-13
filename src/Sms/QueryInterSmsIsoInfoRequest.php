<?php

namespace AlibabaCloud\Sms;

use AlibabaCloud\Core\RpcRequest;

/**
 * Class QueryInterSmsIsoInfoRequest
 *
 * @package AlibabaCloud\Sms
 */
class QueryInterSmsIsoInfoRequest extends RpcRequest {

	public function __construct() {
		parent::__construct('Dysmsapi', '2017-05-25', 'QueryInterSmsIsoInfo');
		$this->setMethod('POST');
	}

	private $resourceOwnerAccount;

	private $countryName;

	private $resourceOwnerId;

	private $ownerId;


}