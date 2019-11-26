<?php
include_once(CONTROLLER.'PostsControl.php');

/** Création des routes et trouver le controller */
class Router
{
    private $request;
    private $routes = [
        "" =>                         ["controller" => 'StaticControl', "method" => 'showMain'],
        "about" =>                    ["controller" => 'StaticControl', "method" => 'showAbout'],
        "connexion" =>                ["controller" => 'StaticControl', "method" => 'showConnexion'],
        "book" =>                     ["controller" => 'PostsControl', "method" => 'listPosts'],
        "readBook" =>                 ["controller" => 'PostsControl', "method" => 'post'],
        "edit-post" =>                ["controller" => 'PostsControl', "method" => 'editChapter'],
        "edit-post/update" =>         ["controller" => 'PostsControl', "method" => 'updateChapter'],


    ];



    public function __construct($request)
    {
        $this->request = $request;
    }


    public function renderController()
    {

        $request = $this->request;

        if (key_exists($request, $this->routes)) {
            $controller = $this->routes[$request]['controller'];
            $method = $this->routes[$request]['method'];


            $currentController = new $controller();
            $currentController->$method();
        } else {
            echo '404';
        }
    }
}
