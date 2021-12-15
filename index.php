<?php
define('LOAD', 1);
require "_load.php";
use \Mezon\Router;
$router = new \Mezon\Router\Router();

$router->addRoute('/static-route/', 'MySite::someStaticMethod');
$router->addRoute('/contacts/', function(){}, 'POST'); // this handler will be called for POST requests
$router->addRoute('/contacts/', function(){}, 'GET');  // this handler will be called for GET requests
$router->addRoute('/contacts/', function(){}, 'PUT');  // this handler will be called for PUT requests
$router->addRoute('/contacts/', function(){}, 'DELETE');  // this handler will be called for DELETE requests
$router->addRoute('/contacts/', function(){}, 'OPTION');  // this handler will be called for OPTION requests
$router->addRoute('/contacts/', function(){}, 'PATCH');  // this handler will be called for PATCH requests
// $router->addRoute('/contacts/', function(){});
$router->addRoute('/*/', function(){});
$router->addRoute('/index/', function(){});

$callback = $router->getCallback('/static-route/');
var_dump($callback());
