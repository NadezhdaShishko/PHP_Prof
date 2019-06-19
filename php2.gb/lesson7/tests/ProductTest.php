<?php

use app\model\entities\Products;
use app\model\Models;


class ProductTest extends \PHPUnit\Framework\TestCase
{
    public function testProduct() {
        $product = new Products("Кекс", "Сдоба с изюмом", 55);
        $this->assertEquals("Кекс", $product->name);
        $this->assertEquals("Сдоба с изюмом", $product->description);
        /*
        $this->assertTrue(strpos(Models::class, "App\\") === 0);
        $this->assertEquals (array_slice(explode("\\", get_class(new Models)), 1, 1); === ["Model"])
        $this->assertEquals (substr_count(Models::class, "\\") === 2);
        */
    }
}