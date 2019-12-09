<?php

namespace JForteroche\Blog\Model;
use \PDO;

class AdminManager
{

    private $db;
    public $error_login = "";



    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=p4_blog_forteroche;charset=utf8', 'root', '');
    }



    function connexionChecks($ID_user, $password)
    {
        $db = $this->db;
        $req = $db->prepare('SELECT `username`, `pass_admin` FROM `admin`');
        $req->execute();
        $getAdminData = $req->fetch();


        
        if ($ID_user == $getAdminData['username']) 
        {

            if (password_verify($password, $getAdminData['pass_admin'])) 
            {
                
                $_SESSION['isAdmin'] = true;
                $_SESSION['user_admin'] = $ID_user;

            } else {
                header('Location: ' . HOST . 'connexion');
                $_SESSION['$error_login'] = 'Le Mot de passe saisi est incorrect.';
                exit();
            }

        } else {
            header('Location: ' . HOST . 'connexion');
            $_SESSION['$error_login'] = 'L\'identifiant saisi est incorrect';
            exit();
            
        }
    }
}
