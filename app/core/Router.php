<?php
namespace App\Core;

use App\Controllers\StudentsController;

class Router

{

private array $routers =[];
public function add (string $method,string $uri,string $controller, string $function)
{
    $this ->routers[]=
    [
        'method' => $method,
        'uri' => $uri,
        'controller' => $controller,
        'function'=> $function
    ];
}
    public function run ()
    {
        $method = $_SERVER ['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        foreach ($this->router as $route)
        {
            
        }

        if ($method== 'GET' && $uri =='/students')
            {
                require_once './app/controllers/StudentController.php';
                $controller = new StudentsController();
                $controller -> index();
                return;
            }
        if ($method== 'GET' && $uri =='/students/create')
            {
                require_once './app/controllers/StudentController.php';
                $controller = new StudentsController();
                $controller -> create();
                return;
            }
            http_response_code(404);
            echo '<h1>Page Not Found</h1>';
    }

}
?>