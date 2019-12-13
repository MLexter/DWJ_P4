<?php

require_once(MODEL . 'CommentManager.php');
require_once(MODEL . 'PostManager.php');


class CommentControl
{


    function postComment()
    {
        
            if (isset($_POST['comment_author'], $_POST['comment_content']) AND !empty($_POST['comment_author']) AND !empty($_POST['comment_content']))
            {  
                $ID_chapter = htmlspecialchars($_GET['id']);
                $author_comment = htmlspecialchars($_POST['comment_author']);
                $content_comment = htmlspecialchars($_POST['comment_content']);
                $_SESSION['comment_success'] = null;
                

                if (strlen($author_comment) < 30) 
                {

                    $commentManager = new \JForteroche\Blog\Model\CommentManager();
                    $newComment = $commentManager->createComment($ID_chapter, $author_comment, $content_comment);

                    header('Location: '. HOST . 'readBook&id=' . $_GET['id']);
                    $_SESSION['comment_success'] = true;

                } else {

                    $_SESSION['comment_error_message'] = 'Votre pseudo doit faire moins de 30 caractères.';
                }

                if ($newComment === false) 
                {
                    throw new Exception($_SESSION['comment_error_message'] = 'Impossible d\'ajouter le commentaire !');
                }   
            

            } else {

                $_SESSION['comment_error_message'] = 'Veuillez compléter tous les champs pour poster un commentaire.';

        }
        
    }

    public function manageComments()
    {
        if (isset($_GET['id'])) 
        {         
        $_SESSION['ID_chapitre'] = htmlspecialchars($_GET['id']);

        $commentManager = new \JForteroche\Blog\Model\CommentManager();
        $comments = $commentManager->getComments($_SESSION['ID_chapitre']);

        $viewToDisplay = new ViewRenderer('manageCommentsView');
        $viewToDisplay->renderView(array('comments' => $comments));
        }
    }

    public function deleteComment()
    {
        if (isset($_GET['id']))
        {
            $ID_post_comment = $_GET['id'];
            $commentManager = new \JForteroche\Blog\Model\CommentManager();
            $comment = $commentManager->deletePostComment($ID_post_comment);
            header('Location: ' . HOST . 'admin/manage-comments&id=' . $_SESSION['ID_chapitre']);

        }
    }

    public function signalComment()
    {
        $comment_ID = htmlspecialchars($_GET['comment']); 
        $ID_chapter = ($_GET['id']);
        @$_SESSION['comment_signalment'] = false;

        $commentManager = new \JForteroche\Blog\Model\CommentManager();
        $signalment = $commentManager->addCommentSignalment($comment_ID, $ID_chapter);

        $_SESSION['signal_message'] = 'Le commentaire a bien été signalé et sera traité par l\'administrateur du site.';
        header('Location: ' . HOST . 'readBook&id=' . $ID_chapter);

    }

    public function manageSignalments()
    {
        
            $commentManager = new \JForteroche\Blog\Model\CommentManager();
            $signalmentList = $commentManager->getAllSignalments();
    
            $viewToDisplay = new ViewRenderer('manageSignalmentsView');
            $viewToDisplay->renderView(array('signalmentList' => $signalmentList));

        
    }

    public function deleteSignaledComment()
    {
        if (isset($_GET['id']))
        {
            $ID_post_comment = htmlspecialchars($_GET['id']);
            $commentManager = new \JForteroche\Blog\Model\CommentManager();
            $comment = $commentManager->deletePostComment($ID_post_comment);

            header('Location: ' . HOST . 'admin/manage-signalments&amp;signal-comment=1');
        }
    }

    public function cancelSignalment()
    {
        $ID_comment = htmlspecialchars($_GET['id']);

        $commentManager = new \JForteroche\Blog\Model\CommentManager();
        $removeSignalment = $commentManager->removeSignalment($ID_comment);

        header('Location: ' . HOST . 'admin/manage-signalments&amp;signal-comment=1');
    }

    public function deleteAllSignalments()
    {
        $commentManager = new \JForteroche\Blog\Model\CommentManager();
        $deleteSignaledList = $commentManager->deleteAllSignaled();

        $viewToDisplay = new ViewRenderer('manageSignalmentsView');
        $viewToDisplay->renderView();
    }
}
