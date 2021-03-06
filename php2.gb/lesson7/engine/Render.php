<?php

namespace app\engine;


use app\interfaces\IRenderer;

class Render implements IRenderer
{
    public function renderTemplate($template, $params = []) {
        ob_start();
        extract($params);
        $fileName = TEMPLATES_DIR . $template . ".php";
        if (file_exists($fileName)) {
            include $fileName;
        }
        else
            throw new \Exception("Шаблон {$template} не существует", 404);
        return ob_get_clean();
    }
}