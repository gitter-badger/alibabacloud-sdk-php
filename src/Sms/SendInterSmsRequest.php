<?php

namespace AlibabaCloud\Sms;

use AlibabaCloud\Core\RpcRequest;

/**
 * Class SendInterSmsRequest
 *
 * @package AlibabaCloud\Sms
 */
class SendInterSmsRequest extends RpcRequest {

	public function __construct() {
		parent::__construct("Dysmsapi", "2017-05-25", "SendInterSms");
		$this->setMethod("POST");
	}

	private $templateCode;

	private $phoneNumbers;

	private $countryCode;

	private $signName;

	private $resourceOwnerAccount;

	private $templateParam;

	private $resourceOwnerId;

	private $ownerId;

	private $outId;





}