<?php

require_once __DIR__.'/init.php';

$name = $request->get('name', 'WorldING');

$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));
$response->send();

?>


