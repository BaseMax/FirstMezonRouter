<?php
// Require composer autoloader
require 'mezon.php';

// Create Router instance
$router = new \Mezon\Router\Router();

// Define routes
$router->addRoute('/', function(string $route) {
    print "$route\n";
    print "Hello, World!\n";
}, 'GET');
$router->addRoute('/[i:digit]-[s:name].html', function(string $route, array $parameters) {
    print "$route\n";
    print_r($parameters);
}, 'GET');

// $router->addRoute('/static-route/', 'MySite::someStaticMethod');
// $router->addRoute('/contacts/', function(){}, 'POST'); // this handler will be called for POST requests
// $router->addRoute('/contacts/', function(){}, 'GET');  // this handler will be called for GET requests
// $router->addRoute('/contacts/', function(){}, 'PUT');  // this handler will be called for PUT requests
// $router->addRoute('/contacts/', function(){}, 'DELETE');  // this handler will be called for DELETE requests
// $router->addRoute('/contacts/', function(){}, 'OPTION');  // this handler will be called for OPTION requests
// $router->addRoute('/contacts/', function(){}, 'PATCH');  // this handler will be called for PATCH requests
// $router->addRoute('/contacts/', function(){});
// $router->addRoute('/*/', function(){});
// $router->addRoute('/index/', function(){});

// Test it!
// $callback = $router->getCallback('/');
// $callback = $router->getCallback('/100-test.html');
// var_dump($callback);

// Run and Test it!
$router->callRoute('/');
$router->callRoute('/100-test.html');

// Run it!
// $path = $_SERVER["REQUEST_URI"];
// $router->callRoute($path);
