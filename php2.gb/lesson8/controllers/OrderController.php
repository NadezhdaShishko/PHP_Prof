<?php
namespace app\controllers;

use app\engine\App;

class OrderController extends Controller
{
    public function actionIndex() {
        echo $this->render('order', [

            'products' => App::call()->orderRepository->getOrder(id_user())
        ]);
    }

    public function actionAddOrder() {

        //Поместить корзину в заказ

        App::call()->orderRepository->save(new Order(id_user(),
            App::call()->request->getParams()['id']));

        $count = App::call()->orderRepository->getCountWhere('id_user', id_user());

        $response = ['count' => $count];
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function actionDelete()
    {
        //Прежде чем удалять, убедимся что сессия совпадает
        $id = App::call()->request->getParams()['id'];

        $order = App::call()->orderRepository->getOne($id);

        if (id_user() == $order->id_user) {
            App::call()->orderRepository->delete($order);

            $count = App::call()->orderRepository->getCountWhere('id_user', id_user());

            echo json_encode(['response' => 1, 'count' => $count]);
        } else
        {
            echo json_encode(['response' => 0]);
        }

    }

    public function actionOrder(){
        echo "order";
    }
}