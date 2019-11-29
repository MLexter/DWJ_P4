<?php

require_once(MODEL . 'CommentManager.php');


class CommentControl
{


    function postComment()
{
    $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();

    $postId = htmlspecialchars($_POST['id_post_comment']);
    $author_comment = htmlspecialchars($_POST['author_comment']);
    $content_comment = htmlspecialchars($_POST['content_comment']);

    $newComment = $commentManager->createComment($postId, $author_comment, $content_comment);

    if ($newComment === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: ' . HOST . 'readBook&amp;id=' . $postId);
    }
}

// function viewComment()
// {
//         $commentManager = new \OpenClassrooms\Blog\Model\CommentManager();
//         $comment = $commentManager->getComment($_GET['id']);

//         require('view/frontend/editView.php');
// }
}