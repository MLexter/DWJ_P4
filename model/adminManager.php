<?php

namespace JForteroche\Blog\Model;
use \PDO;

class AdminManager
{

    private $db;



    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=p4_blog_forteroche;charset=utf8', 'root', '');
    }



    function connexionChecks($ID_user, $hashedUserPassword)
    {
        $db = $this->db;
        $hashedReq = $db->query('SELECT ID_login, pass_admin FROM `admin`')->fetchAll();
var_dump($hashedReq); die();
        return $hashedReq;
    }

    
}
