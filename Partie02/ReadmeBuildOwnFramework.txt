$> composer require symfony/http-foundation
$> composer require symfony/routing

$> symfony server:start
$> symfony local:php:list (version PHP)

https://symfony.com/doc/4.4/create_framework/introduction.html

http://localhost:8888/create_framework/routing.html
ROUTING
With URL map, we have decoupled the URL from the code that generates the associated response,
but it is not yet flexible enough.
For instance, we might want to support dynamic paths to allow embedding data directly into the URL
(e.g. /hello/Fabien) instead of relying on a query string (e.g. /hello?name=Fabien).

Route configuration has been moved to its own file: src/app.php (No more map array in front(end).php file.

We now have a clear separation between the configuration (everything specific to our application in app.php)
and the framework (the generic code that powers our application in front.php).

