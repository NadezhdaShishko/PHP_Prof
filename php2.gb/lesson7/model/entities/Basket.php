<?php

namespace app\model\entities;

class Basket extends DataEntity
{
    public $id;
    public $session_id;
    public $product_id;
    public $property = [
        'id' => false,
        'session_id' => false,
        'product_id' => false
    ];

    public function __construct($session_id = null, $product_id = null)
    {
        $this->session_id = $session_id;
        $this->product_id = $product_id;
    }

    public function setSession_id($session_id)
    {
        $this->property['session_id'] = true;
        $this->session_id = $session_id;
    }

    public function setProduct_id($product_id)
    {
        $this->property['product_id'] = true;
        $this->product_id = $product_id;
    }

    public function propertyFalse()
    {
        $this->property['id'] = false;
        $this->property['login'] = false;
        $this->property['pass'] = false;
    }
}