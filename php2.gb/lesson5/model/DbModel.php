<?php

namespace app\model;


use app\engine\Db;

abstract class DbModel extends Models
{

    public static function getWhere($name, $value) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE `{$name}` = :value";
        return Db::getInstance()->queryOne($sql, ['value' => $value]);
    }

    public static function getOne($id) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryObject($sql, ['id' => $id], static::class);
    }
    public static function getAll() {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }

    public static function getLimit(int $from,int $limit) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} LIMIT {$from}, {$limit}";
        return Db::getInstance()->queryAll($sql);
    }

    public function insert() {
        $tableName = static::getTableName();
        $params = [];
        $columns = [];
        foreach ($this as $key => $value) {
            if ($key == "id") continue;
            $params[":{$key}"] = $value;
            $columns[] = "`$key`";
        }
        $columns = implode(", ", $columns);
        $values = implode(", ", array_keys($params));
        $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ({$values})";
        Db::getInstance()->execute($sql, $params);
        $this->id = Db::getInstance()->lastInsertId();
        var_dump($sql);
    }

    public function update() {
        $tableName = static::getTableName();
        $params = [];
        $columns = [];
        foreach ($this as $key => $value) {
            if ($key == "id" || $key == "property") continue;
            if ($this->property[$key] == false) continue;
            $columns[] = "`$key` = :{$key}";
            $params[":{$key}"] = $value;
            var_dump($columns, $params);
        }
        $columns = implode(", ", $columns);
        $params[':id'] = $this->id;
        $sql = "UPDATE {$tableName} SET {$columns} WHERE id = :id";
        Db::getInstance()->execute($sql, $params);var_dump($columns, $params);
        $this->propertyFalse();
        var_dump($sql);
    }

    public function delete() {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id]);
    }

    public function save() {
        if (is_null($this->id))
            $this->insert();
        else
            $this->update();
    }
}