<?php
include_once(CONTROLLER.'PostsControl.php');

/** Création des routes et trouver le controller */
class Router
{
    private $request;
    private $routes = 
    [
        "" =>                         ["controller" => 'StaticControl', "method" => 'showMain'],
        "about" =>                    ["controller" => 'StaticControl', "method" => 'showAbout'],
        "connexion" =>                ["controller" => 'StaticControl', "method" => 'showConnexion'],
        "book" =>                     ["controller" => 'PostsControl', "method" => 'getAllPosts'],
        "readBook" =>                 ["controller" => 'PostsControl', "method" => 'getPostById'],
        "edit-post" =>                ["controller" => 'PostsControl', "method" => 'editChapter'],
        "edit-post/update" =>         ["controller" => 'PostsControl', "method" => 'updateChapter'],
        "admin/create" =>             ["controller" => 'PostsControl', "method" => 'createPost'],
        "admin" =>                    ["controller" => 'AdminControl', "method" => 'showMainAdmin'],


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
