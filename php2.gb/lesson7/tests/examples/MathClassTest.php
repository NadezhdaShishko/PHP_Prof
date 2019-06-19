<?php


namespace app\tests\examples;

use PHPUnit\Framework\TestCase;

class MathClassTest extends TestCase
{
    public function testFactorial()
    {
        $my = new MathClass();
        $this->assertEquals(6, $my->factorial(3));
    }
}