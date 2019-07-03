<?php
namespace app\controllers;

use app\engine\App;

class UserController extends Controller
{
    public function actionIndex()
    {
        $users = App::call()->userRepository->getAll();
        echo $this->render("users", [
            'users' => $users
        ]);
    }

    public function actionLogin() {

        if (isset(App::call()->request->getParams()['submit'])) {
            $login = App::call()->request->getParams()['login'];
            $pass = App::call()->request->getParams()['pass'];
            if (!App::call()->userRepository->auth($login, $pass)) {
                Die("Не верный пароль!");
            } else
                header("Location: /");
            exit();
        }
    }
    public function actionLogout() {
        session_destroy();
//        setcookie("hash");
        header("Location: /");
        exit();
    }
}