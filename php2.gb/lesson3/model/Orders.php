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

    public function __construct($id_user = null, $id_product = null, $subtotal = null, $discount = null, $total = null, $address = null)
    {
        parent::__construct();
        $this->id_user = $id_user;
        $this->id_product = $id_product;
        $this->subtotal = $subtotal;
        $this->discount = $discount;
        $this->total = $total;
        $this->address = $address;
    }

    public function insertProduct() {
        $tableName = $this->getTableName();
        $sql = "INSERT INTO {$tableName} (id_user, id_product, subtotal, discount, total, address) VALUES (:id_user, :id_product, :subtotal, :discount, :total, :address)";
        return $this->db->execute($sql, ['id_user' => $this->id_user, 'id_product' => $this->id_product, 'subtotal' => $this->subtotal, 'discount' => $this->discount, 'total' => $this->total, 'address' => $this->address]);
    }
    
    public function getTableName() {
        return 'orders';
    }
}