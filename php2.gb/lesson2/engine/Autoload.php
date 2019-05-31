<?php

namespace app\engine;

define ('ROOT', dirname(__DIR__));

class Autoload
{
    public function loadClass($className) {
        
        $fileName = str_replace(['app\\', '\\'], ['', DIRECTORY_SEPARATOR], $className);
        $fileName = ROOT . DIRECTORY_SEPARATOR . "{$fileName}.php";
        // var_dump($fileName);
        if (file_exists($fileName)) {
            require_once $fileName;
        }
    }
}