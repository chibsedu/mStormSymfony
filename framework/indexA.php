<?php

// $> php -S localhost:8888
// Rename this file to indexA.php
// http://localhost:8888/hello_world/

require_once __DIR__.'../../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// $request = Request::createFromGlobals();
$request = Request::create(
    '/hello-world',
    'GET',
    ['name' => 'Fabien Potencier']      // Si commented gives: 'Hello WORLDING'
);

$name = $request->get('name', 'WORLDING');
// $name = $request->server->get('HTTP_HOST');


$response = new Response(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));

$response->send();



?>