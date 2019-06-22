<?php
namespace app\controllers;

use app\models\repositories\UserRepository;
use app\engine\Request;

class UserController extends Controller
{
    public function actionLogin() {
        $request = new Request();
        if (isset($_POST['send'])) {
            $login = $request->getParams()['login'];
            $pass = $request->getParams()['pass'];
            if (!(new UserRepository())->auth($login, $pass)) {
                Die("Не верный пароль!");
            } else
                header("Location: /");
            exit();
        }
    }
    public function actionLogout() {
        session_destroy();
        setcookie("hash");
        header("Location: /");
        exit();
    }
}