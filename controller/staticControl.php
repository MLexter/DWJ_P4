<?php



class StaticControl
{
    public function showMain()
    {
        // include(VIEW.'main.php');
        $viewToDisplay = new ViewRenderer('main');
        $viewToDisplay->renderView();
    }


    public function showAbout()
    {
        // include(VIEW.'aboutView.php');
        $viewToDisplay = new ViewRenderer('aboutView');
        $viewToDisplay->renderView();
    }


    public function showContact()
    {
        // include(VIEW . 'contact.php');
        $viewToDisplay = new ViewRenderer('contact');
        $viewToDisplay->renderView();
    }

    public function showConnexion()
    {
        // include(VIEW.'connexionView.php');
        $viewToDisplay = new ViewRenderer('connexionView');
        $viewToDisplay->renderView();
    }
}