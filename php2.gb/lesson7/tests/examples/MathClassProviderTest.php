<?php


namespace app\tests\examples;


use PHPUnit\Framework\TestCase;

class MathClassProviderTest extends TestCase
{
    /**
     * @dataProvider providerFactorial
     */
    public function testFactorial($a, $b)
    {
        $my = new MathClass();
        $this->assertEquals($b, $my->factorial($a));
    }
    public function providerFactorial()
    {
        return array (
            array (0, 1),
            array (2, 2),
            array (5, 120)
        );
    }
}