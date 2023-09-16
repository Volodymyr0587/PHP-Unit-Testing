<?php

use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    /** @test */
    public function checkIfDataPresent()
    {
        $collect = new \App\Support\Collection([]);

        $this->assertEmpty($collect->getData());
    }
}