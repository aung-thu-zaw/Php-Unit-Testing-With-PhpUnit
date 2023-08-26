<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function test_adding_return_correct_sum()
    {
        require 'function.php';

        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(10, add(6, 4));
    }

    public function test_adding_does_not_return_the_incorrect_sum()
    {
        $this->assertNotEquals('4', add(2, 3));
    }
}
