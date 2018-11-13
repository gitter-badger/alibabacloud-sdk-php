<?php

namespace AlibabaCloud\Test\Sms;

use AlibabaCloud\Core\Exception\ClientException;
use AlibabaCloud\Sms\Sms;
use PHPUnit\Framework\TestCase;

/**
 * Class SmsTest
 *
 * @package AlibabaCloud\Test\Sms
 */
class SmsTest extends TestCase {

	public function testSms() {
		try {
			$response = Sms::SendSms()
						   ->client('puling')
						   ->setPhoneNumbers('18813040170')
						   ->setSignName('nz')
						   ->setTemplateCode('121221')
						   ->setTemplateParam(json_encode(array(
															  'code'    => '12345',
															  'product' => 'dsd',
														  ),
														  JSON_UNESCAPED_UNICODE))
						   ->get();
			\dump($response);
		} catch (ClientException $exception) {
			\dd(1);
			\dump($exception);
		}
	}

}
