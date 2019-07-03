<?php

use app\engine\Request;
use app\models\repositories\BasketRepository;
use app\models\repositories\ProductRepository;
use app\models\repositories\UserRepository;
use app\models\repositories\OrderRepository;
use app\engine\Db;

return [
    'root_dir' => __DIR__ . "/../",
    'templates_dir' => __DIR__ . "/../views/",
    'controllers_namespaces' => 'app\controllers\\',
    'components' => [
        'db' => [
            'class' => Db::class,
            'driver' => 'mysql',
            'host' => 'localhost',
            'login' => 'root',
            'password' => '',
            'database' => 'shop_php2',
            'charset' => 'utf8'
        ],
        'request' => [
            'class' => Request::class
        ],

        'basketRepository' => [
            'class' => BasketRepository::class
        ],
        'productRepository' => [
            'class' => ProductRepository::class
        ],
        'userRepository' => [
            'class' => UserRepository::class
        ],
        'orderRepository' => [
            'class' => OrderRepository::class
        ]
    ]
];
//define('DIR_ROOT', dirname(__DIR__));
//define('DS', DIRECTORY_SEPARATOR);
//define("CONTROLLER_NAMESPACE", "app\\controllers\\");
//define("TEMPLATES_DIR", "../views/");
//define("TWIG_DIR", "../twigtemplates/");