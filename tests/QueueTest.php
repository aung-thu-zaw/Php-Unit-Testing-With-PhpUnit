<?php

use Classes\Queue;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function test_new_queue_is_empty(): void
    {
        $queue = new Queue();

        $this->assertEquals(0, $queue->getCount());
    }

    public function test_an_item_is_added_to_the_queue()
    {
        $queue = new Queue();

        $queue->push("item 1");

        $this->assertEquals(1,$queue->getCount());
    }

    public function test_an_item_is_removed_from_the_queue(){
        $queue = new Queue();

        $queue->push("item 1");

        $queue->pop();

        $this->assertEquals(0, $this->getCount());
    }
}
