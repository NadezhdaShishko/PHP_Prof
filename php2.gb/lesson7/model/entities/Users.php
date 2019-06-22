<?php

namespace app\model\entities;


class Users extends DataEntity
{
    public $id;
    public $login;
    public $pass;
    public $hash;
    public $property = [
        'id' => false,
        'login' => false,
        'pass' => false,
        'hash' => false
    ];

    public function getLogin()
    {
        return $this->login;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public  function getHash()
    {
        return $this->hash;
    }

    public function setLogin($login)
    {
        $this->property['login'] = true;
        $this->login = $login;
    }

    public function setPass($pass)
    {
        $this->property['pass'] = true;
        $this->pass = $pass;
    }

    public function setHash($hash)
    {
        $this->property['hash'] = true;
        $this->hash = $hash;
    }

    public function propertyFalse()
    {
        $this->property['id'] = false;
        $this->property['login'] = false;
        $this->property['pass'] = false;
        $this->property['hash'] = false;
    }
}