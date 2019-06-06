<?php

require "../engine/Autoload.php";
require "../config/config.php";

use app\engine\Autoload;
use app\model\Products;
use app\model\Users;
// use app\model\Orders;


spl_autoload_register([new Autoload(), 'loadClass']);

$product = Products::getOne(16);
$product->setName("Фанта");

$product->save();
// var_dump($product);

// $product = new Products("7Up", "Напиток газированный", 60);
// $product->save();

// $product = Products::getOne(14);
// $user = Users::getOne(5);
// $user->delete();
