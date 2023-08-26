<?php

use Classes\Queue;
use Classes\QueueException;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected static $queue;

    protected function setUp(): void
    {
        static::$queue->clear();
    }

    // Before the first test of the class is run
    public static function setUpBeforeClass(): void
    {
        static::$queue = new Queue();
    }

    // After the last test of the class run
    public static function tearDownAfterClass(): void
    {
        static::$queue = null;
    }

    public function test_new_queue_is_empty(): void
    {
        $this->assertEquals(0, static::$queue->getCount());

    }

    public function test_an_item_is_added_to_the_queue(): void
    {
        static::$queue->push("item 1");

        $this->assertEquals(1, static::$queue->getCount());

    }

    public function test_an_item_is_removed_from_the_queue(): void
    {
        static::$queue->push("item 1");

        $item = static::$queue->pop();

        $this->assertEquals(0, $this->getCount());

        $this->assertEquals("item 1", $item);
    }

    public function test_an_item_is_removed_from_the_front_of_queue()
    {
        static::$queue->push("first item");

        static::$queue->push("second item");

        $this->assertEquals("first item", static::$queue->shift());
    }

    public function test_max_number_of_items_can_be_added()
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            static::$queue->push($i);
        }

        $this->assertEquals(Queue::MAX_ITEMS, static::$queue->getCount());
    }

    public function test_exception_thrown_when_adding_an_item_of_full_queue()
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            static::$queue->push($i);
        }

        $this->expectException(QueueException::class);

        $this->expectExceptionMessage("Queue is full!");

        static::$queue->push("last");
    }
}
