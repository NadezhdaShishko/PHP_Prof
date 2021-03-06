<?php


namespace app\model;

use app\engine\Db;
use app\model\entities\DataEntity;

abstract class Repository
{
    protected $db;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getCountWhere($field, $value) {
        $tableName = $this->getTableName();
        $sql = "SELECT count(*) as count FROM {$tableName} WHERE `$field`=:$field";
        return $this->db->queryOne($sql, ["$field"=>$value])['count'];
    }

    public function getOneWhere($field, $value) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE `$field`=:$field";
        return $this->db->queryObject($sql, ["$field"=>$value], $this->getEntityClass());
    }

    public function getOne($id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryObject($sql, ['id' => $id], $this->getEntityClass());
    }
    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

    public function getLimit(int $from,int $limit) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} LIMIT {$from}, {$limit}";
        return $this->db->queryAll($sql);
    }

    public function insert(DataEntity $entity) {
        $tableName = $this->getTableName();
        $params = [];
        $columns = [];
        foreach ($entity as $key => $value) {
            if ($key == "id" || $key == "property") continue;
            $params[":{$key}"] = $value;
            $columns[] = "`$key`";
        }
        $columns = implode(", ", $columns);
        $values = implode(", ", array_keys($params));
        $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ({$values})";
        $this->db->execute($sql, $params);
        $entity->id = $this->db->lastInsertId();
        $entity->propertyFalse();
    }

    public function update(DataEntity $entity) {
        $tableName = $this->getTableName();
        $params = [];
        $columns = [];
        foreach ($entity as $key => $value) {
            if ($key == "id" || $key == "property") continue;
            if ($entity->property[$key] == false) continue;
            $columns[] = "`$key` = :{$key}";
            $params[":{$key}"] = $value;
//            var_dump($columns, $params);
        }
        $columns = implode(", ", $columns);
        $params[':id'] = $entity->id;
        $sql = "UPDATE {$tableName} SET {$columns} WHERE id = :id";
        $this->db->execute($sql, $params);
        $entity->propertyFalse();
    }

    public function delete(DataEntity $entity) {
        $tableName = $this->getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return $this->db->execute($sql, ['id' => $entity->id]);
    }

    public function save(DataEntity $entity) {
        if (is_null($entity->id))
            $this->insert($entity);
        else
            $this->update($entity);
    }

    abstract public function getTableName();

    abstract public function getEntityClass();
}