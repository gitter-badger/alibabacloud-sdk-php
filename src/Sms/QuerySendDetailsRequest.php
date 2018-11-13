<?php

namespace AlibabaCloud\Sms;

use AlibabaCloud\Core\RpcRequest;

/**
 * Class QuerySendDetailsRequest
 *
 * @package AlibabaCloud\Sms
 */
class QuerySendDetailsRequest extends RpcRequest {

	public function __construct() {
		parent::__construct("Dysmsapi", "2017-05-25", "QuerySendDetails");
		$this->setMethod("POST");
	}

	private $sendDate;

	private $pageSize;

	private $phoneNumber;

	private $resourceOwnerAccount;

	private $currentPage;

	private $bizId;

	private $resourceOwnerId;

	private $ownerId;

}