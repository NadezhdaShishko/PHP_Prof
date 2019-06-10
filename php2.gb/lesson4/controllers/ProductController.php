<?php
namespace app\controllers;

class ProductController
{
    private $action;

    public function runAction($action = null)
    {
        $this->action = $action ? : 'index';
        $method = "action" . ucfirst($this->action);
        if(method_exists($this, $method))
            $this->$method();
        else
            echo "404";
    }

    public function actionIndex(){
        echo "catalog";
    }

    public function actionCard(){
        $this->renderTemplate('card');
    }

    public  function  renderTemplate($template, $params = []) {
        ob_start();
        extract($params);
        $fileName = TEMPLATES_DIR . $template . ".php";
        var_dump($fileName);
    }
}