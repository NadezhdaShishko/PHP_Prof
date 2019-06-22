<?php
namespace app\controllers;

use app\model\repositories\BasketRepository;
use app\model\entities\Basket;
use app\engine\Request;

class BasketController extends Controller
{
    public function actionDelete()
    {
        $id = (new Request())->getParams()['id'];
        $basket = (new BasketRepository())->getOne($id);
        if (session_id() == $basket->session_id) {
            (new BasketRepository())->delete($basket);
            $count = (new BasketRepository())->getCountWhere('session_id', session_id());
            $response = [
                'result' => 1,
                'count' => $count
            ];
            header('Content-Type: application/json');
            echo json_encode($response);
        } else
        {
            echo json_encode(['$response => 0']);
        }

    }

    public function actionAddBasket() {

        $id = (new Request())->getParams()['id'];
        $basket = new Basket(session_id(), $id);
        (new BasketRepository())->save($basket);

        $count = (new BasketRepository())->getCountWhere('session_id', session_id());

        $response = [
            'result' => 1,
            'count' => $count
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function actionIndex()
    {
        echo $this->render('basket', [
            'products' => (new BasketRepository())->getBasket(session_id())]);
    }

    // public function actionItem()
    // {
    //     $id = $_GET['id'];
    //     $basket = Baskets::getOne($id);
    //     echo $this->render('item', ['basket'=> $basket]);
    // }
}
