<?php



class StaticControl
{


    public function showMain()
    {
        $viewToDisplay = new ViewRenderer('main');
        $viewToDisplay->renderView();
    }


    public function showAbout()
    {
        $viewToDisplay = new ViewRenderer('aboutView');
        $viewToDisplay->renderView();
    }


    public function showContact()
    {
        $viewToDisplay = new ViewRenderer('contactView');
        $viewToDisplay->renderView();
    }


    public function showConnexion()
    {
        $viewToDisplay = new ViewRenderer('connexionView');
        $viewToDisplay->renderView();
    }

    public function showCreateChapter()
    {
        
        $viewToDisplay = new ViewRenderer('createPostView');
        $viewToDisplay->renderView();
    }
    
    public function showContactView()
    {
        $viewToDisplay = new ViewRenderer('contactView');
        $viewToDisplay->renderView();
    }

}