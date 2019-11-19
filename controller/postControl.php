<?php


// Chargement des classes
require_once(MODEL.'PostManager.php');
require_once(MODEL.'CommentManager.php');

function listPosts()
{
    $postManager = new \JForteroche\Blog\Model\PostManager();
    $posts = $postManager->getPosts();

    require(VIEW.'/listPostsView.php');
}

function post()
{
    $postManager = new \JForteroche\Blog\Model\PostManager();
    $commentManager = new \JForteroche\Blog\Model\CommentManager();
    
    $post = $postManager->getPost($_GET['id']);
    $title_content = htmlspecialchars($post['author_post_title']);
    $comments = $commentManager->getComments($_GET['id']);

    require(VIEW.'/postView.php');
}

function postEdit($ID_post, $author_post_content)
{
        $modifiedContent = new \JForteroche\Blog\Model\PostManager();


        $newPost = $modifiedContent->modifyAuthorPost($ID_post, $author_post_content);

        if ($modifiedContent === false) {

            throw new Exception('Impossible de modifier ce chapitre !');
        } else {
            echo 'CONTENU : ' . $_POST['author_post_content'];
            header('Location: index.php?action=listPosts&id=' . $ID_post);
        }
}

function contentLimiter()
{
    // Récuperer le nombre de caractères de l'article
    // au X ieme caratctère, remplacer la suite par '...' et ajouter un 'Lire la suite'

    $contentLenght = '';


}

