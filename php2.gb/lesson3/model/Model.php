<?php

namespace app\model;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{
    protected $db;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getWhere($name, $value) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE (name  = :name) = (value = :value)";
        return $this->db->queryAll($sql, [':name' => $name, ':value' => $value]);
    }

    public function getOne($id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryOne($sql, ['id' => $id]);
    }
    
    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

    public function insert() {
        $tableName = $this->getTableName();
        // foreach ($this->db as )
        $sql = "INSERT INTO {$tableName} ()";
        return $this->db->execute($sql, []);
        $insert_id = $db->lastInsertId();
    }

    public function update() {}
    
    public function delete() {
        $tableName = $this->getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return $this->db->execute($sql, ['id' => $this->id = "insert_id"]);
    }
}