<?php

namespace AlibabaCloud\Test\Ecs;

use AlibabaCloud\Core\Exception\ClientException;
use AlibabaCloud\Ecs\Ecs;
use PHPUnit\Framework\TestCase;

/**
 * Class EcsTest
 *
 * @package AlibabaCloud\Test\Ecs
 */
class EcsTest extends TestCase {

	public function testEcs() {
		try {
			$response = Ecs::DescribeRegions()->client('puling')->get();
			\dump($response);
		} catch (ClientException $exception) {
			\dump($exception);
		}
	}

}
