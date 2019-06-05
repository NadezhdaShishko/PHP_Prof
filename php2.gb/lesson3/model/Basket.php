<?php

namespace app\model;

class Basket extends Model
{
    public $id;
    public $session_id;
    public $product_id;

    public function __construct($session_id = null, $product_id = null)
    {
        parent::__construct();
        $this->session_id = $session_id;
        $this->product_id = $product_id;
    }

    public function insertBasket() {
        $tableName = $this->getTableName();
        $sql = "INSERT INTO {$tableName} (session_id, product_id) VALUES (:session_id, :product_id)";
        return $this->db->execute($sql, ['session_id' => $this->session_id, 'product_id' => $this->product_id]);
    }

    public function getTableName() {
        return 'basket';
    }

}