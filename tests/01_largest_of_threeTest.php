<?php
use PHPUnit\Framework\TestCase;

// Include the student file
require_once __DIR__ . '/../01_largest_of_three.php';

class LargestOfThreeTest extends TestCase
{
    public function testLargest()
    {
        $this->assertEquals(9, largest(3, 7, 9));
        $this->assertEquals(10, largest(10, 10, 5));
        $this->assertEquals(0, largest(-1, 0, -5));
        $this->assertEquals(100, largest(100, 99, 100));
    }
}

