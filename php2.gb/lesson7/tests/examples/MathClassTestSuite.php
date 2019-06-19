<?php


namespace app\tests\examples;

use PHPUnit\Framework\TestSuite;

class MathClassTestSuite extends TestSuite
{
    protected $sharedFixture;
    public static function suite()
    {
        $suite = new MathClassTestSuite ('MyTestSuite');
        $suite->addTestSuite('MathClassTest');
        $suite->addTestSuite('MathClassProviderTest');
        return $suite;
    }

    protected function setUp()
    {
        $this->sharedFixture = new MathClass();
    }

    protected function tearDown()
    {
        $this->sharedFixture = NULL;
    }
}