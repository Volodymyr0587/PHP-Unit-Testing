<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testTrueReturnstrue()
    {
        $output = false;
        if (1 === 1) {
            $output = true;
        }
    
        $this->assertTrue($output);
    }

    public function testCheckIfHasKey(): void 
    {
        $userArray = [
            'name' => 'John', 
            'age' => 36
        ];

        $this->assertArrayHasKey('age', $userArray);
    }
}