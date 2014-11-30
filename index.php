<?php
require 'vendor/autoload.php';

use Whoops\Run as WhoopsRun;
use Whoops\Handler\PrettyPageHandler;

//debug tools
$whoops = new WhoopsRun();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array(
    //'cache' => './cache'
));

$forArray = array(
    'abc' => 'abc',
    'cjp' => 'cjp'
);

$jsString = "<script>alert('cjp');</script>";

//echo $twig->render('first.html.twig', array('header' => 'TO BE NO!', 'for_array' => $forArray));

echo $twig->render(
    'extend_first.html.twig',
    array(
        'header' => 'TO BE NO!',
        'for_array' => $forArray,
        'js_string' => $jsString
    )
    );
