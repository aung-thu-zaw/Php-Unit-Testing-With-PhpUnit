<?php

use PHPUnit\Framework\TestCase;
use classes\User;

class UserTest extends TestCase
{
    public function test_return_name()
    {
        require "./classes/User.php";

        $user = new User("Aung Thu Zaw");

        $this->assertEquals("Aung Thu Zaw", $user->getName());
    }

    public function test_name_is_empty_by_default(){

        $user = new User();

        $this->assertEquals("", $user->getName());
    }
}
