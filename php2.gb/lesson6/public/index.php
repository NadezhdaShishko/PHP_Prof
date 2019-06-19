<?php
session_start();

require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Products;
use app\engine\Autoload;
use app\engine\Render;
use app\engine\Request;
use app\engine\TwigRender;

require_once '../vendor/autoload.php';
spl_autoload_register([new Autoload(), 'loadClass']);

$request = new Request();

$controllerName = $request->getControllerName() ?: 'product';
$actionName = $request->getActionName();

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render());
    $controller->runAction($actionName);
} else {
    echo "404";
}

/** @var Products $product */

// $product = Products::getOne(19);
// $product->setName("Mountain Dew");
//
// $product->save();
// var_dump($product);

// $product = new Products("7Up", "Напиток газированный", 60);
// $product->save();

// $product = Products::getOne(14);
// $user = Users::getOne(5);
// $user->delete();
