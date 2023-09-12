<?php

use Classes\Mailer;
use PHPUnit\Framework\TestCase;
use Classes\User;

class UserTest extends TestCase
{
    public function test_return_name()
    {
        $user = new User("Aung Thu Zaw");

        $this->assertEquals("Aung Thu Zaw", $user->getName());
    }

    public function test_name_is_empty_by_default()
    {

        $user = new User();

        $this->assertEquals("", $user->getName());
    }

    public function test_notification_is_sent()
    {
        $user = new User("Aung Thu Zaw", "aungthuzaw@gmail.com");

        $mockMailer = $this->createMock(Mailer::class);

        $mockMailer->method("send")->willReturn(true);

        $user->setMailer($mockMailer);

        $this->assertTrue($user->notify("Hello World!"));
    }
}
