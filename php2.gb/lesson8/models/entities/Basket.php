<?php

namespace app\models\entities;

class Basket extends DataEntity
{
    public $id;
    public $session_id;
    public $product_id;
    public $properties = [
        'id' => false,
        'session_id' => false,
        'product_id' => false
    ];

    public function __construct($session = null, $product = null)
    {
        $this->session_id = $session;
        $this->product_id = $product;
    }

    public function setId($id): void
    {
        $this->id = $id;
        $this->properties['id'] = true;
    }

    public function setSessionId($session_id): void
    {
        $this->session_id = $session_id;
        $this->properties['session_id'] = true;
    }

    public function setProductId($product_id): void
    {
        $this->product_id = $product_id;
        $this->properties['product_id'] = true;
    }

    public function propertiesAllFalse()
    {
        $this->properties['id'] = false;
        $this->properties['login'] = false;
        $this->properties['pass'] = false;
    }

    public function getTableName()
    {
        return "basket";
    }
}