<?php

use Classes\Queue;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function test_new_queue_is_empty(): Queue
    {
        $queue = new Queue();

        $this->assertEquals(0, $queue->getCount());

        return $queue;
    }

    /**
     * @depends test_new_queue_is_empty
     */

    public function test_an_item_is_added_to_the_queue(Queue $queue): Queue
    {
        $queue->push("item 1");

        $this->assertEquals(1, $queue->getCount());

        return $queue;
    }

    /**
    * @depends test_an_item_is_added_to_the_queue
    */
    public function test_an_item_is_removed_from_the_queue(Queue $queue): void
    {
        $item = $queue->pop();

        $this->assertEquals(0, $this->getCount());

        $this->assertEquals("item 1", $item);
    }
}
