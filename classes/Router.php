<?php


/** Création des routes et trouver le controller */
class Router
{
    private $request;
    private $routes = [ "home" => "main"];

    public function __construct($request)
    {
        $this->request = $request;
    }


    public function renderController()
    {

$request = $this->request;

if (key_exists($request, $this->routes))
{
    $controller = $this->routes[$request];
    include(CONTROLLER.$controller.'.php');
} else {
            echo '404';
        }
    }
}
