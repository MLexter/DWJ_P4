<?php
require_once(CONTROLLER.'mainControl.php');

/** Création des routes et trouver le controller */
class Router
{
    private $request;
    private $routes = [ 
                        "home" => ["controller" => 'Home', "method" => 'showMain'],
                        // "book" => ["controller" => 'postControl', "method" => 'listPosts'],
    ];

    public function __construct($request)
    {
        $this->request = $request;
    }


    public function renderController()
    {

$request = $this->request;

if (key_exists($request, $this->routes))
{
    $controller = $this->routes[$request]['controller'];
    $method = $this->routes[$request]['method'];


    $currentController = new $controller();
    $currentController->$method();
} else {
            echo '404';
        }
    }
}
