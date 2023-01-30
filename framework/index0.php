<?php

// $> cd /Users/kuntak/Documents/ProjectsProgrammation/WebDevFour/ProjectsSymfony/SymfonyTests/TestHttpKernel/test0
// $> php -S localhost:8888
// Rename this file to indexA.php
// http://localhost:8888/framework/?name=Ali  (Under Firefox)
// http://localhost:8888/framework/index.php?name=Mohammed


$name = $_GET['name'] ?? 'World';

header('Content-Type: text/html; charset=utf-8');

printf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));





?>