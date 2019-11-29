<?php

require_once(MODEL . 'CommentManager.php');


class CommentControl
{


    function postComment()
    {
        if (isset($_POST['submit_commentaire'])) {
            if (isset($_POST['author_comment'], $_POST['content_comment']) and !empty($_POST['content_comment'])) {
                
                $ID_chapter = htmlspecialchars($_GET['id']);
                $author_comment = htmlspecialchars($_POST['author_comment']);
                $content_comment = htmlspecialchars($_POST['content_comment']);

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
