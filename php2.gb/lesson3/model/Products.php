<?php

namespace app\model;

class Products extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;

    public function __construct($name = null, $description = null, $price = null)
    {
        parent::__construct();
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function insertProduct() {
        $tableName = $this->getTableName();
        $sql = "INSERT INTO {$tableName} (name, description, price) VALUES (:name, :description, :price)";
        return $this->db->execute($sql, ['name' => $this->name, 'description' => $this->description, 'price' => $this->price]);
    }

    public function getTableName() {
        return 'products';
    }
}