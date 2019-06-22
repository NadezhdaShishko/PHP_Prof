<?php


namespace app\models\repositories;


use app\models\Repository;
use app\models\entities\Users;

class UserRepository extends Repository
{
    public $id;
    public $login;
    public $pass;
    public $hash;

    /**
     * Users constructor.
     * @param $id
     * @param $login
     * @param $pass
     * @param $hash
     */
    public function __construct($id = null, $login = null, $pass = null, $hash = null)
    {
        parent::__construct();
        $this->id = $id;
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

    public function isAuth() {
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