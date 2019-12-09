<?php

require_once(MODEL . 'AdminManager.php');
require_once(MODEL . 'CommentManager.php');


class AdminControl
{
    private $username;
    private $password;
    

    public function showMainAdmin()
    {       
        if(isset($_SESSION['isAdmin']))
        {
            if ($_SESSION['isAdmin'] = true)
            {

                $postManager = new \JForteroche\Blog\Model\PostManager();
                $posts = $postManager->getPosts();

                

                
                $viewToDisplay = new ViewRenderer('adminView');
                $viewToDisplay->renderView(array('posts' =>$posts)); 
            }
        } else {
            header('Location: ' . HOST . 'connexion');
        }
    }

    
    function verifyConnexionInfos()
    {
        
            if (isset($_POST['ID_user'], $_POST['password_user']))
            {
                if (!empty($_POST['ID_user']) AND !empty($_POST['password_user']))
                {
                    $ID_user = htmlspecialchars($_POST['ID_user']);
                    $password = htmlspecialchars($_POST['password_user']);

                    $connexion = new \JForteroche\Blog\Model\AdminManager();
                    $checkValues = $connexion->connexionChecks($ID_user, $password);
                

                    if ($_SESSION['isAdmin'] = true)
                    {
                        header('Location: ' . HOST . 'admin/dashboard');
                
                    } else {
                        $_SESSION['$error_login'] = 'Le mot de passe saisi est incorrect.';               
                    }
        
                } else {
                    header('Location: ' . HOST . 'connexion');
                    $_SESSION['$error_login'] = 'Vous devez saisir un identifiant et un mot de passe pour vous connecter.';

                }    
            } else {
                header('Location: ' . HOST . 'connexion');
            }
        
        // $hashMdp = password_hash('LUNETTESNOIRES', PASSWORD_DEFAULT);
    }

    function logoutAdmin()
    {
       session_start();
       $_SESSION = array();
       session_destroy();

       header('Location: ' . HOST);
    }


}
