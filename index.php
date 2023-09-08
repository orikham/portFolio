<?php
session_start();
require_once './vendor/altorouter/altorouter/AltoRouter.php';
require_once './vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('/projets/portFolio');


//accueil du site
$router->map('GET', '/', 'HomeController#home', 'home');
$router->map('GET', '/formation', 'HomeController#formation', 'formation');
$router->map('GET', '/projets', 'HomeController#projets', 'projets');
$router->map('GET', '/contact', 'HomeController#contact', 'contact');

$match = $router->match();


if(is_array($match)){
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller();

    if(is_callable(array($obj, $action))){
        call_user_func_array(array($obj, $action), $match['params']);
    }
}