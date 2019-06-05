<?php

namespace app\model;

class Users extends Model
{
  public $id;
  public $login;
  public $pass;

  public function __construct($login = null, $pass = null)
    {
        parent::__construct();
        $this->login = $login;
        $this->pass = $pass;
    }

    public function insertUser() {
        $tableName = $this->getTableName();
        $sql = "INSERT INTO {$tableName} (login, pass) VALUES (:login, :pass)";
        return $this->db->execute($sql, ['login' => $this->login, 'pass' => $this->pass]);
    }

  public function getTableName() {
      return 'users';
  }
}