<?php 
use Phalcon\Mvc\Router;

$router = new Router();

// Cedrick Blas
$router->add('/:controller/:action', [
   'namespace' => 'NewsApp\Controllers',
   'controller' => 1,
   'action' => 2,
]);

//page site routing
$router->add('/frequently-asked-questions', [
   'controller' => 'site',
   'action' => 'faq'
]);

$router->add('/about', [
   'controller' => 'site',
   'action' => 'about'
]);

$router->add('/contact', [
   'controller' => 'site',
   'action' => 'contact'
]);

$router->add('/terms', [
   'controller' => 'site',
   'action' => 'terms'
]);

$router->add('/login', [
   'controller' => 'session',
   'action' => 'login'
]);

$router->add('/logout', [
   'controller' => 'session',
   'action' => 'logout'
]);

//Admin Router
$router->add('/admin/:controller/:action/:params', [
   'namespace' => 'NewsApp\Controllers\Admin',
   'controller' => 1,
   'action' => 2,
   'params' => 3,
]);

$router->add('/admin/:controller', [
   'namespace' => 'NewsApp\Controllers\Admin',
   'controller' => 1
]);

$router->add('/admin', [
   'namespace' => 'NewsApp\Controllers\Admin',
   'controller' => 'index'
]);


$router->add('/see-profile/:params', [
   'namespace' => 'NewsApp\Controllers\Admin',
   'controller' => 'profile',
   'action' => 'see',
   'params' => 1
]);




//Admin Router

//User Router
$router->add('/user/:controller/:action/:params', [
   'namespace' => 'NewsApp\Controllers\User',
   'controller' => 1,
   'action' => 2,
   'params' => 3,
]);

$router->add('/user/:controller', [
   'namespace' => 'NewsApp\Controllers\User',
   'controller' => 1
]);

$router->add('/user', [
   'namespace' => 'NewsApp\Controllers\User',
   'controller' => 'index'
]);

//User Router



//Student Router
$router->add('/student/:controller/:action/:params', [
   'namespace' => 'NewsApp\Controllers\Student',
   'controller' => 1,
   'action' => 2,
   'params' => 3,
]);

$router->add('/student/:controller', [
   'namespace' => 'NewsApp\Controllers\Student',
   'controller' => 1
]);

$router->add('/student', [
   'namespace' => 'NewsApp\Controllers\Student',
   'controller' => 'index'
]);

//Student Router

$router->removeExtraSlashes(true);


return $router;
// $router->handle();