<?php
require_once './app/core/router.php';
use App\Core\Router;
$router = new router();

$router->add('GET','/students','StudentCOntroller','index');
$router->add('GET','/students/create','StudentCOntroller','create');
$router->add('GET','/students/{id}','StudentCOntroller','show');


$router-> run();
{
   
}
?>