<?php

namespace Tests\Unit;

use App\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

/**
 * Class FizzBuzzTest
 * @package Tests\Unit
 * @group FizzBuzzTest
 */
class FizzBuzzTest extends TestCase
{

    public function testGetSpecific()
    {
        $this->assertEquals(1, FizzBuzz::getSpecific(1));
        $this->assertEquals(2, FizzBuzz::getSpecific(2));
        $this->assertEquals("Fizz", FizzBuzz::getSpecific(3));
        $this->assertEquals(4, FizzBuzz::getSpecific(4));
        $this->assertEquals(5, FizzBuzz::getSpecific(5));
        $this->assertEquals("Fizz", FizzBuzz::getSpecific(6));
        $this->assertEquals("Buzz", FizzBuzz::getSpecific(7));
        $this->assertEquals('Fizz', FizzBuzz::getSpecific(9));
        $this->assertEquals(10, FizzBuzz::getSpecific(10));
        $this->assertEquals(11, FizzBuzz::getSpecific(11));
        $this->assertEquals('Fizz', FizzBuzz::getSpecific(12));
        $this->assertEquals("Buzz", FizzBuzz::getSpecific(14));
        $this->assertEquals('Fizz', FizzBuzz::getSpecific(15));
        $this->assertEquals(16, FizzBuzz::getSpecific(16));
        $this->assertEquals("Fizz", FizzBuzz::getSpecific(18));
        $this->assertEquals('FizzBuzz', FizzBuzz::getSpecific(21));
        $this->assertEquals(22, FizzBuzz::getSpecific(22));
        $this->assertEquals('FizzBuzz', FizzBuzz::getSpecific(42));
        $this->assertEquals("Buzz", FizzBuzz::getSpecific(49));
    }

    public function testGetRange()
    {
        $this->assertEquals(
            ['13', 'Buzz', 'Fizz', '16', '17', 'Fizz', '19', '20', 'FizzBuzz', '22'],
            FizzBuzz::getRange(13, 22)
        );

        $this->assertEquals(
            ['32', 'Buzz', '38', '41', '44', '47', '50', '53', 'Buzz', '59', '62', '65', '68', '71'],
            FizzBuzz::getRange(32, 71, 3)
        );
    }
}
