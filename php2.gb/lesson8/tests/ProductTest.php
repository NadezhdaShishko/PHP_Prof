<?php

use app\models\entities\Products;


class ProductTest extends \PHPUnit\Framework\TestCase
{
    public function testProduct() {
        $product = new Products("Кекс", "Сдоба с изюмом", 55);
        $this->assertEquals("Кекс", $product->name);
        $this->assertEquals("Сдоба с изюмом", $product->description);
    }
}