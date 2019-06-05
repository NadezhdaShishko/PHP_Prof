<?php
require "../engine/Autoload.php";

use app\engine\Autoload;
use app\engine\Db;
use app\model\Products;
use app\model\Users;
use app\model\Orders;


spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Products(new Db());
$user = new Users(new Db());
$order = new Orders(new Db());

var_dump($product);
echo "</br>";
var_dump($product instanceof IModel);
echo "</br>";
var_dump($user);
echo "</br>";
var_dump($order);