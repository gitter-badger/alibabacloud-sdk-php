<?php

namespace AlibabaCloud\Sms;

use AlibabaCloud\Core\RpcRequest;

/**
 * Class SendBatchSmsRequest
 *
 * @package AlibabaCloud\Sms
 */
class SendBatchSmsRequest extends RpcRequest
{
	public function  __construct()
	{
		parent::__construct("Dysmsapi", "2017-05-25", "SendBatchSms");
		$this->setMethod("POST");
	}

	private  $templateCode;

	private  $templateParamJson;

	private  $resourceOwnerAccount;

	private  $smsUpExtendCodeJson;

	private  $resourceOwnerId;

	private  $signNameJson;

	private  $ownerId;

	private  $phoneNumberJson;




	
}