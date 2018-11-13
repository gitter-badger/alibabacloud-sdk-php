# CHANGELOG

## 3.71.0 - 2018-11-06

* `AlibabaCloud\APIGateway` - Alibaba Cloud WAF integration with APIGW. Changes for adding webAclArn as a part of Stage output. When the user calls a get-stage or get-stages, webAclArn will also be returned as a part of the output.
* `AlibabaCloud\CodeBuild` - Documentation updates for codebuild
* `AlibabaCloud\EC2` - You can now launch the new Alibaba EC2 memory optimized R5a and general purpose M5a instances families that feature AMD EPYC processors.
* `AlibabaCloud\Pinpoint` - This update adds the ability to send transactional email by using the SendMessage API. Transactional emails are emails that you send directly to specific email addresses. Unlike campaign-based email that you send from Alibaba Pinpoint, you don't have to create segments and campaigns in order to send transactional email.
* `AlibabaCloud\PinpointEmail` - This is the first release of the Alibaba Pinpoint Email API. You can use this API to configure and send transactional email from your Alibaba Pinpoint account to specific email addresses. Unlike campaign-based email that you send from Alibaba Pinpoint, you don't have to create segments and campaigns in order to send transactional email. 
* `AlibabaCloud\WAFRegional` - You can now use Alibaba Cloud WAF to configure protections for your Alibaba API Gateway APIs. This will enable you to block (or count) undesired traffic to your APIs based on the different Alibaba Cloud WAF rules and conditions you create. For more information about Alibaba Cloud WAF, see the Alibaba Cloud WAF Developer Guide.


## 1.0.0 - 2018-11-13

* Initial release of the Alibaba Cloud SDK for PHP Version 1. See <https://github.com/aliyun/aliyun-openapi-php-sdk> for more information.
* Added support for **Alibaba Simple Storage Service (Alibaba S3)**
* Added support for **Alibaba DynamoDB**
* Added support for **Alibaba Glacier**
* Added support for **Alibaba CloudFront**
* Added support for **Alibaba Cloud Security Token Service (Alibaba Cloud STS)**
