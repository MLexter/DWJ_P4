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

    // function viewComment()
    // {
    //         $commentManager = new \JForteroche\Blog\Model\CommentManager();
    //         $comment = $commentManager->getComment($_GET['id']);

    //         require('view/frontend/editView.php');
    // }
}
