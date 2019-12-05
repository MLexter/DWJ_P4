<?php

require_once(MODEL . 'AdminManager.php');


class AdminControl
{
    private $username;
    private $password;
    

    public function showMainAdmin()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $posts = $postManager->getPosts();


        $viewToDisplay = new ViewRenderer('adminView');
        $viewToDisplay->renderView(array('posts' =>$posts));
        // include(VIEW.'adminView.php');

    }

    
    function verifyConnexionInfos()
    {
        $userID = htmlspecialchars($_POST['ID_user']);
        $password = htmlspecialchars($_POST['password_user']);
        $hashedUserPassword = password_hash($password, PASSWORD_DEFAULT);

        $connexion = new \JForteroche\Blog\Model\AdminManager();
        $checkValues = $connexion->connexionChecks($userID, $hashedUserPassword);


        // $hashMdp = password_hash('LUNETTESNOIRES', PASSWORD_DEFAULT);

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
