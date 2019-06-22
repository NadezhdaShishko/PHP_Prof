<?php

namespace app\models\entities;


class Users extends DataEntity
{
    public $id;
    public $login;
    public $pass;
    public $hash;
    public $properties = [
        'id' => false,
        'login' => false,
        'pass' => false,
        'hash' => false
    ];

    public function __construct($login = null, $pass = null)
    {
        $this->login = $login;
        $this->pass = $pass;
    }

    public function setId($id): void
    {
        $this->id = $id;
        $this->properties['id'] = true;
    }


    public function setLogin($login): void
    {
        $this->login = $login;
        $this->properties['login'] = true;
    }


    public function setPass($pass): void
    {
        $this->pass = $pass;
        $this->properties['pass'] = true;
    }

    public function setHash($hash): void
    {
        $this->hash = $hash;
        $this->properties['hash'] = true;
    }

    public function propertiesAllFalse()
    {
        $this->properties['id'] = false;
        $this->properties['login'] = false;
        $this->properties['pass'] = false;
        $this->properties['hash'] = false;
    }

    public static function getTableName()
    {
        return "users";
    }
}