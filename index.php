<?php

//Bootstrap contains the Router class
require 'core/bootstrap.php';

// $router = new Router;
//
// require 'routes.php';

$uri = Request::uri();

//Load the routes
$router = Router::load('routes.php');
require $router->direct($uri);
