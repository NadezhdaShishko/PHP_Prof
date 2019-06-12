<?php
namespace app\controllers;

use app\model\Basket;

class BasketController extends Controller
{
    public function actionIndex()
    {
        echo $this->render('basket');
    }

    public function actionBaskets()
    {
        $baskets = Baskets::getAll();
        echo $this->render('baskets', ['baskets' => $baskets]);
    }

    public function actionItem()
    {
        $id = $_GET['id'];
        $basket = Baskets::getOne($id);
        echo $this->render('item', ['basket'=> $basket]);
    }
}
