<?php


class Home 
{
    public function showMain()
    {
        include(VIEW.'main.php');
    }


    public function showContact()
    {
        include(VIEW.'contact.php');
    }
}

