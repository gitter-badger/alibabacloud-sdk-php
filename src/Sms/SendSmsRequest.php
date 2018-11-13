<?php

namespace AlibabaCloud\Sms;

use AlibabaCloud\Core\Request\RpcRequest;

/**
 * Class SendSmsRequest
 * @method self setTemplateCode(string $templateCode)
 * @method string getTemplateCode()
 * @method self setPhoneNumbers(string $phoneNumbers)
 * @method string getPhoneNumbers()
 * @method self setSignName(string $signName)
 * @method string getSignature()
 * @method self setResourceOwnerAccount(string $resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method self setTemplateParam(string $templateParam)
 * @method string getTemplateParam()
 * @method self setResourceOwnerId(string $resourceOwnerId)
 * @method string getResourceOwnerId()
 * @method self setOutId(string $outId)
 * @method string getOutId()
 * @method self setOwnerId(string $ownerId)
 * @method string getOwnerId()
 * @method self setSmsUpExtendCode(string $smsUpExtendCode)
 * @method string getSmsUpExtendCode()
 *
 * @package AlibabaCloud\Sms
 */
class SendSmsRequest extends RpcRequest {

	/**
	 * SendSmsRequest constructor.
	 *
	 * @param mixed ...$parameters
	 *
	 * @throws \AlibabaCloud\Core\Exception\ClientException
	 */
	public function __construct(...$parameters) {
		parent::__construct(...$parameters);
		$this->setServiceCode('Dysmsapi');
		$this->setVersion('2017-05-25');
		$this->setAction('SendSms');
		$this->method('POST');
	}

}