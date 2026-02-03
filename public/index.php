<?php
require_once './app/core/router.php';
use App\Core\Router;
$router = new router();

$router->add('GET','/students','StudentController','index');
$router->add('GET','/students/create','StudentController','create');
$router->add('GET','/students/{id}','StudentController','show');


$router-> run();
{
   
}
?>