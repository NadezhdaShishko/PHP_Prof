<?php

namespace app\model;

class Orders extends DbModel
{
    public $id;
    public $id_user;
    public $id_product;
    public $subtotal;
    public $discount;
    public $total;
    public $address;

    public function __construct($id_user = null, $id_product = null, $subtotal = null, $discount = null, $total = null, $address = null)
    {
        $this->id_user = $id_user;
        $this->id_product = $id_product;
        $this->subtotal = $subtotal;
        $this->discount = $discount;
        $this->total = $total;
        $this->address = $address;
    }
    
    public static function getTableName() {
        return 'orders';
    }
}