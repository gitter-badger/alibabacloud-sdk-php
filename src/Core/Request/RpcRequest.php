<?php

namespace AlibabaCloud\Core\Request;

/**
 * Class RpcRequest
 *
 * @package AlibabaCloud\Core\Request
 */
abstract class RpcRequest extends Request {

	/**
	 * RpcRequest constructor.
	 *
	 * @param mixed ...$parameters
	 *
	 * @throws \AlibabaCloud\Core\Exception\ClientException
	 */
	public function __construct(...$parameters) {
		parent::__construct(...$parameters);
		$this->setApiParameters('Id', $this->getRegionId());
		$this->setApiParameters('AccessKeyId', $this->getClient()->getCredential()->getAccessKeyId());
		$this->setApiParameters('SignatureMethod', $this->getSignature()->method);
		$this->setApiParameters('SignatureVersion', $this->getSignature()->version);
		$this->setApiParameters('SignatureNonce', $this->getSignature()->getNonce());
		$this->setApiParameters('Timestamp', $this->getSignature()->getTimestamp());
	}
}
