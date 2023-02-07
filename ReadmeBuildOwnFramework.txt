
$> composer require
$> symfony local:php:list (version PHP)


https://symfony.com/doc/4.4/create_framework/http_foundation.html


https://symfony.com/doc/4.4/create_framework/introduction.html

Anyway, if you have a look at the MVC semantics, this book is about how to create the Controller 
part of a framework. For the Model and the View, it really depends on your personal taste and 
you can use any existing third-party libraries (Doctrine, Propel or plain-old PDO for the Model; 
PHP or Twig for the View).

 THE FUNDAMENTAL PRINCIPLES OF THE SYMFONY COMPONENTS ARE FOCUSED ON THE HTTP SPECIFICATION. 
 
 As such, the framework that you are going to create should be more accurately labelled as a 
 HTTP framework or Request/Response framework.


The first step towards better code is probably to use an Object-Oriented approach; 
that's the main goal of the Symfony HttpFoundation component: 
replacing the default PHP global variables and functions by an Object-Oriented layer.


https://symfony.com/doc/4.4/create_framework/http_foundation.html
The createFromGlobals() method creates a Request object based on the current PHP global variables.
The send() method sends the Response object back to the client (it first outputs the HTTP headers followed by the content).


