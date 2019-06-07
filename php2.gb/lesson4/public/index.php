<?php

require "../engine/Autoload.php";
require "../config/config.php";

use app\engine\Autoload;
use app\model\Products;
use app\model\Users;
// use app\model\Orders;


spl_autoload_register([new Autoload(), 'loadClass']);


$controllerName = $_GET['c'] ? : 'product';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if(class_exists($controllerClass)) {
    $controller = new $controllerClass();
    $controller->runAction($actionName);
} else {
    echo "404";
}

// $product = Products::getOne(16);
// $product->setName("Фанта");

// $product->save();
// var_dump($product);

// $product = new Products("7Up", "Напиток газированный", 60);
// $product->save();

// $product = Products::getOne(14);
// $user = Users::getOne(5);
// $user->delete();
