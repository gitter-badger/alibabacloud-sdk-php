<?php

namespace AlibabaCloud\Test\Client;

use AlibabaCloud\Core\AlibabaCloud;
use AlibabaCloud\Core\Exception\ClientException;
use AlibabaCloud\Ecs\Ecs;
use AlibabaCloud\Oss\Oss;
use AlibabaCloud\Sms\Sms;
use Symfony\Component\Dotenv\Dotenv;

require_once './vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');
/**
 * 传统的对象传递已经不适合了，比如在Laravel中
 * 开发者应该可以在任何地方访问任何服务
 * 不能要求开发者在每个需要发短信的地方先new profile再new client再new短信的类再getResponse
 *
 * 拒绝依赖传递
 * 拒绝硬编码
 */

// 以下代码每一行都何以和谐共生，可以在任何环境和PHP框架中运行

AlibabaCloud::loadCredentialsFile();
AlibabaCloud::setGlobalRegionId('cn-hangzhou');

// 用 DefaultProfile 创建一个全局的阿里云客户端，第二个参数为空就是全局默认的客户端
AlibabaCloud::accessKeyClient(\getenv('ALICLOUD_ACCESS_KEY_ID'), \getenv('ALICLOUD_SECRET_ACCESS_KEY'))
			->setRegionId('cn-hangzhou')
			->asDefaultClient();

// 又用 BearerTokenProfile 创建一个全局的阿里云客户端，这次名字叫：token
AlibabaCloud::bearerTokenClient('token')->name('bearerTokenClient');

// 又用 DefaultProfile 创建一个全局的阿里云客户端，这次名字叫：puling

// 又用 EcsRamRoleProfile 创建一个全局的阿里云客户端，这次名字叫：EcsRamRole
AlibabaCloud::ecsRamRoleClient('EcsRamRole')->name('ecsRamRoleClient');
// 又用 RamRoleArnProfile 创建一个全局的阿里云客户端，这次名字叫：RamRoleArn
AlibabaCloud::ramRoleArnClient(\getenv('ALICLOUD_ACCESS_KEY_ID'),
							   \getenv('ALICLOUD_SECRET_ACCESS_KEY'),
							   'roleArn',
							   'ramRoleArnClient');

// 你可以创建无数个客户端，名字相同的最后创建的覆盖前面创建的
// 如果没有创建就调取产品api，会抛出异常，此后可以在任何地方调用阿里云的任何产品，目前只实现了Ecs、Oss、Sms
// Ecs 产品 DescribeRegions 的动作，用叫puling的客户端获取

try {
	$response2 = Ecs::DescribeRegions()->connectTimeout(1)->timeout(0.9)->debug(true)->request();
	\dd($response2->toArray());
} catch (\Exception $exception) {
	\dd($exception->getMessage());
}
exit;
// Oss 使用默认客户端获取buckets列表
$response = Oss::listBuckets();
\dump($response);

try {
	// 链式调用配置请求报文发短信，顾名思义，没有书写client代表使用默认的客户端
	$response =
		Sms::SendSms()
		   ->setPhoneNumbers('18813040170')
		   ->debug(true)
		   ->setSignName('nz')
		   ->setTemplateCode('121221')
		   ->setTemplateParam(json_encode([
											  'code'    => '12345',
											  'product' => 'dsd',
										  ]))
		   ->request();
	\dump($response->toArray());
} catch (ClientException $exception) {
	dump($exception);
}
