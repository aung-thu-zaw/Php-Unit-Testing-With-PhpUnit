<?php

use Classes\Mailer;
use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mock = $this->createMock(Mailer::class);

        $mock->method("send")->willReturn(true);

        $result = $mock->send("aungthuzaw@gmail.com", "Hello, Nice to meet you!");

        $this->assertTrue($result);

    }
}
