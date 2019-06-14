<?php
namespace app\controllers;

use app\model\Users;

class UserController extends Controller
{
    public function actionUser() {
        if (!Users::authSend()) {
            die("Неверный логин или пароль!");
        }
        header("Location: /");
    }

    public function actionLogout() {
        session_destroy();
        header("Location: /");
    }
}