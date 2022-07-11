<?php

require_once __DIR__.'/Actions.php';
$router = new \Bramus\Router\Router();





session_start();



$router->get('/', function(){
    require_once __DIR__.'/../views/editor.php';
});
$router->post('/document', function(){
    $controller = new Actions;
    $controller->new();
});
$router->get('/raw/{name}', function($name){
    $controller = new Actions;
    $controller->rawload($name);
});


$router->get('/{name}', function($name){
    $controller = new Actions;
    $controller->load($name);
});


$router->run();