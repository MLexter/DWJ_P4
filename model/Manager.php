<?php

namespace JForteroche\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=p4_blog_forteroche;charset=utf8', 'root', '');
        return $db;
    }
}