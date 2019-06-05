<?php

require "../engine/Autoload.php";
require "../config/config.php";

use app\engine\Autoload;
use app\model\Products;
use app\model\Users;
// use app\model\Orders;


spl_autoload_register([new Autoload(), 'loadClass']);

// $product = new Products("Пепси", "Напиток газированный", 60);
// var_dump($product->insertProduct());

// $user = new Users("Люси", "gavGav123");
// var_dump($user->insertUser());

$product = new Products();
var_dump($product->getOne(11));

var_dump($product->delete());