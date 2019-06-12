<?php
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(TWIG_DIR);
$twig = new \Twig\Environment($loader);

echo $twig->render('layout/main.twig');