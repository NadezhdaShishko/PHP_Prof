<?php

namespace app\model;

class Users extends DbModel
{
    public $id;
    public $login;
    public $pass;
    public $property = [
        'id' => false,
        'login' => false,
        'pass' => false
    ];

    public function __construct($login = null, $pass = null)
    {
        $this->login = $login;
        $this->pass = $pass;
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
    
    public function propertyFalse()
    {
        $this->property['id'] = false;
        $this->property['login'] = false;
        $this->property['pass'] = false;
    }
    
    public static function auth($login, $pass) {
        $user = static::getOneWhere('login', $login);

        if ($pass == $user->pass) {
            $_SESSION['login'] = $login;
            return true;
        }
        return false;
    }

    public static function isAuth() 
    {
        return isset($_SESSION['login']) ? true: false;
    }

    public static function getUserName()
    {
        return static::isAuth() ? $_SESSION['login'] : "Guest";
    }
    
    public static function getTableName()
    {
        return 'users';
    }
}