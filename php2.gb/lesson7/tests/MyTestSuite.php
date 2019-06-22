<?php
namespace app\tests;

use app\tests\examples\ProductTest;
use app\tests\examples\ShopTest;

class TestSuite extends PHPUnit_Framework_TestSuite
{
    public static function suite()
    {
        $suite = new TestSuite('Tests');
        $suite->addTestSuit('UsersProviderTest');
        $suite->addTestSuite('ProductTest');
        $suite->addTestSuite('ShopTest');
        return $suite;
    }
}