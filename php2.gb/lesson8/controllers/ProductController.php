<?php
namespace app\controllers;

use app\engine\App;

class ProductController extends Controller
{
    public function actionCatalog() {
        $page = App::call()->request->getParams()['page'] ?? 0;
        $page++;
        $limit = $page * 5;
        $products = App::call()->productRepository->getLimit(0, $limit);
        echo $this->render(
            'catalog',
            [
                'products' => $products,
                'page' => $page
            ]
        );
    }

    public function actionApiCatalog()
    {
        $page = App::call()->request->getParams()['page'] ?? 0;
        $page++;
        $limit = $page * 5;
        $products = App::call()->productRepository->getLimit(0, $limit);

        header('Content-Type: application/json');

        echo json_encode([
            'products' => $products,
            'page' => $page
        ], JSON_UNESCAPED_UNICODE);

    }

    public function actionIndex()
    {
        echo $this->render("index");
    }

    public function actionCard()
    {
        $id = App::call()->request->getParams()['id'];
        $product = App::call()->productRepository->getOne($id);
        echo $this->render('card',
            [
                'product' => $product
            ]
        );
    }
}