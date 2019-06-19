<?php

namespace app\engine;

class Autoload
{
   public function loadClass($className) {
    $fileName = str_replace(['app\\', '\\'], [DIR_ROOT . '' . DS, DS], $className) . '.php';
        // var_dump($fileName);
        // echo "</br>";

            if (file_exists($fileName)) {
                require $fileName;
            }


    }
}