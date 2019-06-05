<?php

namespace app\model;

class Basket extends Model
{
    public $id;
    public $name;
    public $quantity;
    public $price;
    public $total;

    public function getTableName() {
        return 'basket';
    }

}