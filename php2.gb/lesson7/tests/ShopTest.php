<?php

class ShopTest extends \PHPUnit\Framework\TestCase {
    public function testFirst() {
        $x = 1;
        $y = 2;
        $result = 3;
        $this->assertEquals($result, $x + $y);
    }

    public function testSub() {
        $x = 3;
        $y = 2;
        $result = 1;
        $this->assertEquals($result, $x - $y);
    }
}
