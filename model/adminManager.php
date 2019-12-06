<?php

namespace JForteroche\Blog\Model;
use \PDO;

class AdminManager
{

    private $db;
    public $isAdmin = false;
    public $error_login = "";



    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=p4_blog_forteroche;charset=utf8', 'root', '');
    }



    function connexionChecks($ID_user, $hashedUserPassword)
    {
        $db = $this->db;
        $req = $db->query('SELECT `ID_login`, `pass_admin` FROM `admin`');

        $getAdminData = $req->fetch();

        if ($ID_user == $getAdminData['ID_login'])
        {
            if (password_verify($hashedUserPassword, $getAdminData['pass_admin']))
            {
                $isAdmin = true;
                
                $_SESSION['user_admin'] = $ID_user;
                $_SESSION['passwd'] = $hashedUserPassword;
                $_SESSION['isAdmin'] = $isAdmin;
                var_dump($_SESSION['user_admin']); die();
            } 
        } else {
            $isAdmin = false;  
            $error_login = 'Les identifiants saisis sont incorrects.';
        }
    } 
}
