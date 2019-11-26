<?php

require_once(MODEL . 'PostManager.php');
require_once(MODEL . 'CommentManager.php');

class AdminControl
{
    private $username;
    private $password;

    public function showMainAdmin()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $posts = $postManager->getPosts();


        $viewToDisplay = new ViewRenderer('adminView');
        $viewToDisplay->renderView($posts);
        // include(VIEW.'adminView.php');


    }

    
    function chekData()
    {
        // vérifier que les 2 inputs sont remplis + expressions régulières
        // Si ok , renvoyer sur fichier ".php" avec fonction qui renvoie l'affichage admin avec redirection
    }

    function adminLogout()
    {
        // Fonction qui permet de se déconnecter de l'espace admin
    }


    
    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
