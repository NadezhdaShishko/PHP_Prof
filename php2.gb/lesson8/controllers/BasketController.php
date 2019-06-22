<?php
namespace app\controllers;

use app\engine\App;
use app\models\repositories\BasketRepository;
use app\models\entities\Basket;
use app\engine\Request;

class BasketController extends Controller
{
    public function actionIndex()
    {
        echo $this->render('basket', [
            'products' => App::call()->BasketRepository->getBasket(session_id())
        ]);
    }

    public function actionAddBasket() {

        App::call()->basketRepository->save(new Basket(session_id(),
            App::call()->request->getParams()['id']));

        $count = App::call()->basketRepository->getCountWhere('session_id', session_id());
        $response = ['count' => $count];
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function actionDelete()
    {
        $id = App::call()->request->getParams()['id'];
        $basket = App::call()->basketRepository->getOne($id);

        if (session_id() == $basket->session_id) {
            App::call()->basketRepository->delete($basket);

            $count = App::call()->basketRepository->getCountWhere('session_id', session_id());
            header('Content-Type: application/json');
            echo json_encode(['response' => 1, 'count' => $count]);
        } else
        {
            echo json_encode(['response => 0']);
        }

    }
}
