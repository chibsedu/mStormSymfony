<?php

// require_once __DIR__.'/init.php'; (with init.php)
// https://127.0.0.1:8000/front.php/hello?name=Ali
// https://127.0.0.1:8000/front.php/bye


$name = $request->get('name', 'World');
$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));

// $response->send(); (with init.php)
?>


