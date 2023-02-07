<?php
require_once __DIR__.'/../vendor/autoload.php';
// Route configuration has been moved to its own file.

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', ['name' => 'WorldAPPRouting']));
$routes->add('bye', new Routing\Route('/bye'));

return $routes;