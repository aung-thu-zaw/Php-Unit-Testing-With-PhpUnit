<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_adding_two_plus_two_result_is_four()
    {
        $this->assertEquals(4, 2 + 2);
    }
}
