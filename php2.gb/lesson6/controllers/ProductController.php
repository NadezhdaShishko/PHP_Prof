<?php
namespace app\controllers;

use app\model\Products;

class ProductController extends Controller
{
    public function actionCatalog() {
        $page = $_GET['page'] ?? 0;
        $page++;
        $limit = $page * 5;
        $products = Products::getLimit(0, $limit);
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
        $id = $_GET['id'];
        $product = Products::getOne($id);
        echo $this->render('card', ['product' => $product]);
    }
}