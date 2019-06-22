<?php

namespace app\models\entities;

class Orders extends DataEntity
{
    public $id;
    public $id_user;
    public $id_product;
    public $subtotal;
    public $discount;
    public $total;
    public $address;
    public $properties = [
        'id' => false,
        'id_user' => false,
        'id_product' => false,
        'subtotal' => false,
        'discount' => false,
        'total' => false,
        'address' => false
    ];

    public function __construct($id_user = null, $id_product = null, $subtotal = null, $discount = null, $total = null, $address = null)
    {
        $this->id_user = $id_user;
        $this->id_product = $id_product;
        $this->subtotal = $subtotal;
        $this->discount = $discount;
        $this->total = $total;
        $this->address = $address;
    }

    public function setId($id): void
    {
        $this->id = $id;
        $this->properties['id'] = true;
    }


    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
        $this->properties['id_user'] = true;
    }


    public function setIdProduct($id_product): void
    {
        $this->id_product = $id_product;
        $this->properties['id_product'] = true;
    }

    public function setSubtotal($subtotal): void
    {
        $this->subtotal = $subtotal;
        $this->properties['subtotal'] = true;
    }

    public function setDiscount($discount): void
    {
        $this->discount = $discount;
        $this->properties['discount'] = true;
    }

    public function setTotal($total): void
    {
        $this->total = $total;
        $this->properties['total'] = true;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
        $this->properties['address'] = true;
    }

    public function propertiesAllFalse() {
        $this->properties['id'] = false;
        $this->properties['id_user'] = false;
        $this->properties['id_product'] = false;
        $this->properties['subtotal'] = false;
        $this->properties['discount'] = false;
        $this->properties['total'] = false;
        $this->properties['address'] = false;
    }

    public static function getTableName()
    {
        return "orders";
    }
}