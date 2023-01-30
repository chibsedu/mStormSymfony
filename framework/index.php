<?php

// $> cd /Users/kuntak/...../SymfonyTests/TestHttpKernel/test0
// Rename this file to indexA.php
// $> php -S localhost:8888
// http://localhost:8888/framework/?name=Ali  (Under Firefox)
// http://localhost:8888/framework/index.php?name=Mohammed



require_once __DIR__.'../../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

    $request = Request::createFromGlobals();

    // $name = $request->get('name', 'WORLD');
    // $name = $request->query->get('name', 'WORLDING');
    // $name = $request->server->get('HTTP_HOST');
    $name = $request->headers->get('User-Agent');
    $response = new Response(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));

    $response->send();


?>


