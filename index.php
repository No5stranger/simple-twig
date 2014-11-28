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
    'cache' => './cache'
));

echo $twig->render('first.html', array('header' => 'TO BE NO!'));
