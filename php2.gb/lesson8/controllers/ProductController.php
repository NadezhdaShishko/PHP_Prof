<?php
namespace app\controllers;

use app\engine\Request;
use app\models\repositories\ProductRepository;

class ProductController extends Controller
{
    public function actionCatalog() {
        $page = $_GET['page'] ?? 0;
        $page++;
        $limit = $page * 5;
        $products = (new ProductRepository())->getLimit(0, $limit);
        echo $this->render(
            'catalog',
            [
                'products' => $products,
                'page' => $page
            ]
        );
    }

    public function actionCard()
    {
        $id = (new Request())->getParams()['id'];
        $product = (new ProductRepository())->getOne($id);
        echo $this->render('card', ['product' => $product]);
    }
}