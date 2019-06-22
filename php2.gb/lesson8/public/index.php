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

require "../engine/Autoload.php";
require "../config/config.php";

//use app\engine\Autoload;
use app\engine\Render;
use app\engine\Request;
//use app\engine\TwigRender;

try {
    require_once '../vendor/autoload.php';
//    spl_autoload_register([new Autoload(), 'loadClass']);

    $request = new Request();

    $controllerName = $request->getControllerName() ?: 'product';
    $actionName = $request->getActionName();

    $controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

    if (class_exists($controllerClass)) {
        $controller = new $controllerClass(new Render());
        $controller->runAction($actionName);
    } else {
        throw new \Exception("Контроллер не существует", 404);
    }
} catch (\PDOException $e) {
    var_dump($e);

} catch (\Exception $e) {
    echo $e->getMessage();
    var_dump($e->getTrace());
}