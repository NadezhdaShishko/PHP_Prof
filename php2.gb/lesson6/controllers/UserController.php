<?php
namespace app\controllers;

use app\model\Users;

class UserController extends Controller
{
    public function actionLogin() {
        $request = new Request();
        if (isset($_POST['submit'])) {
            $login = $request->getParams()['login'];
            $pass = $request->getParams()['pass'];
            if (!Users::auth($login, $pass)) {
                Die("Не верный пароль!");
            } else
                header("Location: /");
            exit();
        }
    }
    public function actionLogout() {
        session_destroy();
        header("Location: /");
        exit();
    }
}