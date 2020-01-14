<?php
include_once(CONTROLLER.'PostsControl.php');
include_once(CONTROLLER.'StaticControl.php');

class Router
{
    private $request;
    private $routes = 
    [
        "" =>                               ["controller" => 'StaticControl', "method" => 'showMain'],
        "about" =>                          ["controller" => 'StaticControl', "method" => 'showAbout'],
        "connexion" =>                      ["controller" => 'StaticControl', "method" => 'showConnexion'],
        "book" =>                           ["controller" => 'PostsControl', "method" => 'getAllPosts'],
        "readBook" =>                       ["controller" => 'PostsControl', "method" => 'getPostById'],
        "contact" =>                        ["controller" => 'StaticControl', "method" => 'showContactView'],
        "mentions-legales" =>               ["controller" => 'StaticControl', "method" => 'showLegalNoticeView'],
        "post-comment" =>                   ["controller" => 'CommentControl', "method" => 'postComment'],
        "send-message" =>                   ["controller" => 'StaticControl', "method" => 'sendMessage'],
        "signal-comment" =>                 ["controller" => 'CommentControl', "method" => 'signalComment'],

        "admin/remove-signalment" =>        ["controller" => 'CommentControl', "method" => 'cancelSignalment'],
        "admin/remove-signalment-all" =>    ["controller" => 'CommentControl', "method" => 'cancelSignalmentAll'],  
        "admin/edit-post" =>                ["controller" => 'PostsControl', "method" => 'editChapter'],
        "admin/post-update" =>              ["controller" => 'PostsControl', "method" => 'updateChapter'],
        "admin/create" =>                   ["controller" => 'StaticControl', "method" => 'showcreateChapter'],
        "admin/create-valid" =>             ["controller" => 'PostsControl', "method" => 'createChapter'],
        "admin/dashboard" =>                ["controller" => 'AdminControl', "method" => 'showMainAdmin'],
        "admin/delete-post" =>              ["controller" => 'PostsControl', "method" => 'deleteChapter'],
        "admin/manage-comments" =>          ["controller" => 'CommentControl', "method" => 'manageComments'],                               
        "admin/manage-signalments" =>       ["controller" => 'CommentControl', "method" => 'manageSignalments'],
        "admin/delete-signaled-comment" =>  ["controller" => 'CommentControl', "method" => 'deleteSignaledComment'],
        "admin/cancel-signalment" =>        ["controller" => 'CommentControl', "method" => 'cancelSignalment'],
        "admin/delete-all-signalments" =>   ["controller" => 'CommentControl', "method" => 'deleteAllSignalments'],   
        "admin/delete-comment" =>           ["controller" => 'CommentControl', "method" => 'deleteComment'],
        "admin/connexion" =>                ["controller" => 'AdminControl', "method" => 'verifyConnexionInfos'],
        "admin/deconnexion" =>              ["controller" => 'AdminControl', "method" => 'logoutAdmin'],  
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
            header('Location: ' . HOST . '404.php');
        }
    }
}
