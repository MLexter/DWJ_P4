<?php



class StaticControl
{
    public function showMain()
    {
        include(VIEW.'main.php');


        // $viewToDisplay = new ViewRenderer('home');
        // $viewToDisplay->renderView();

    }


    public function showAbout()
    {
        include(VIEW.'aboutView.php');
    }

    public function showContact()
    {
        include(VIEW . 'contact.php');
    }
}