<?php
session_start();
if (!isset($_SESSION['times'])) {
    $_SESSION['times'] = 0;
    $_SESSION['generate'] = true;
} else {
    if ($_SESSION['generate'] === true) {
        session_regenerate_id();
        $_SESSION['generate'] = false;
    }
    $_SESSION['times']++;
}

//require "../engine/Autoload.php";
//require "../config/config.php";
require_once '../vendor/autoload.php';
$config = include __DIR__ . "/../config/config.php";

use app\engine\Autoload;
use app\engine\App;

//    spl_autoload_register([new Autoload(), 'loadClass']);
try {
    App::call()->run($config);
} catch (Exception $e) {
    var_dump($e);
}