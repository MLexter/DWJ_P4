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
        if ($_SESSION['success'] == 1)
        {

            $_SESSION['author_post_title'] = "";
            $_SESSION['author_post_content'] = "";
            $_SESSION['success'] = "";
            
        }

        $viewToDisplay = new ViewRenderer('createPostView');
        $viewToDisplay->renderView();
    }
    

}