<?php

namespace app\engine;


use app\interfaces\IRenderer;

class TwigRender implements IRenderer
{
    private $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(TWIG_DIR);
        $this->twig = new \Twig\Environment($loader);
    }

    public function renderTemplate($template, $params = [])
    {
        $templateFile = $template . ".twig";
        return $this->twig->render($templateFile, $params);
    }
}