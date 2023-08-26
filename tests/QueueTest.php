<?php

use Classes\Queue;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue();
    }

    public function test_new_queue_is_empty(): void
    {
        $this->assertEquals(0, $this->queue->getCount());

    }

    public function test_an_item_is_added_to_the_queue(): void
    {
        $this->queue->push("item 1");

        $this->assertEquals(1, $this->queue->getCount());

    }

    public function test_an_item_is_removed_from_the_queue(): void
    {
        $this->queue->push("item 1");

        $item = $this->queue->pop();

        $this->assertEquals(0, $this->getCount());

        $this->assertEquals("item 1", $item);
    }
}
