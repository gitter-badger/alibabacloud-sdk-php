<?php

namespace AlibabaCloud\Test\Oss;

use AlibabaCloud\Oss\Oss;
use PHPUnit\Framework\TestCase;

/**
 * Class OssTest
 *
 * @package AlibabaCloud\Test\Oss
 */
class OssTest extends TestCase {

	public function testOss() {
		Oss::listBuckets();
	}
}
