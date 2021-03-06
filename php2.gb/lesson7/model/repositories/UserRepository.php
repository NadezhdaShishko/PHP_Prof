<?php


namespace app\model\repositories;


use app\model\Repository;
use app\model\entities\Users;

class UserRepository extends Repository
{
    public function __construct($login = null, $pass = null, $hash = null)
    {
        parent::__construct();
        $this->login = $login;
        $this->pass = $pass;
        $this->hash = $hash;
    }

    public function auth($login, $pass) {
        $user = $this->getOneWhere('login', $login);

        if ($pass == $user->pass) {
            $_SESSION['login'] = $login;
            return true;
        }
        return false;
    }

    public function isAuth()
    {
        return isset($_SESSION['login']) ? true: false;
    }

    public function getUserName()
    {
        return $this->isAuth() ? $_SESSION['login'] : "Guest";
    }

    public function getEntityClass() {
        return Users::class;
    }

    public function getTableName()
    {
        return 'users';
    }
}