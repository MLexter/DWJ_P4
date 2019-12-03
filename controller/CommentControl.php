<?php

require_once(MODEL . 'CommentManager.php');


class CommentControl
{


    function postComment()
    {
        if (isset($_POST['submit_comment'])) {
            if (isset($_POST['comment_author'], $_POST['comment_content']) AND !empty($_POST['comment_author']) AND !empty($_POST['comment_content'])) {
                
                $ID_chapter = htmlspecialchars($_GET['id']);
                $author_comment = htmlspecialchars($_POST['comment_author']);
                $content_comment = htmlspecialchars($_POST['comment_content']);

                if (strlen($author_comment) < 30) {
                    $commentManager = new \JForteroche\Blog\Model\CommentManager();
                    $newComment = $commentManager->createComment($ID_chapter, $author_comment, $content_comment);
                } else {
                    $comment_error_message = 'Votre pseudo doit faire moins de 30 caractères.';
                }
                if ($newComment === false) {
                    throw new Exception('Impossible d\'ajouter le commentaire !');
                }   
            }
        } else {
            $comment_error_message = 'Veuillez compléter tous les champs pour poster un commentaire.';
        }
        header('Location: '. HOST . 'book');
    }

    public function manageComments()
    {
        if (isset($_GET['id'])) 
        {         
        $ID_chapitre = htmlspecialchars($_GET['id']);

        $commentManager = new \JForteroche\Blog\Model\CommentManager();
        $comments = $commentManager->getComments($ID_chapitre);

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

            $viewToDisplay = new ViewRenderer('manageCommentsView');
            $viewToDisplay->renderView();
        }
    }
}
