<?php

namespace app\model;

class Orders extends Model
{
    public $id;
    public $id_user;
    public $id_product;
    public $subtotal;
    public $discount;
    public $total;
    public $address;
    
    public function getTableName() {
        return 'orders';
    }
}