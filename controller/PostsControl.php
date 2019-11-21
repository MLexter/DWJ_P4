<?php



// Chargement des classes
require_once(MODEL.'PostManager.php');
require_once(MODEL.'CommentManager.php');

class PostsControl
{
public function listPosts()
{
    $postManager = new \JForteroche\Blog\Model\PostManager();
    $posts = $postManager->getPosts();

    require(VIEW.'/listPostsView.php');
}

public function post()
{
    $postManager = new \JForteroche\Blog\Model\PostManager();
    $commentManager = new \JForteroche\Blog\Model\CommentManager();
    
    $post = $postManager->getPost($_GET['id']);
    $title_content = htmlspecialchars($post['author_post_title']);
    $comments = $commentManager->getComments($_GET['id']);

    require(VIEW.'/postView.php');
}



public function postEdit($postId)
{
        $modifiedContent = new \JForteroche\Blog\Model\PostManager();

        $newPost = $modifiedContent->updatePost($postId);

        if ($modifiedContent === false) {

            throw new Exception('Impossible de modifier ce chapitre !');
        } else {
            echo 'CONTENU : ' . $_POST['author_post_content'];
            header('Location:'.HOST.'readBook&id=' . $postId);
        }
}

public function contentLimiter()
{
    // Récuperer le nombre de caractères de l'article
    // au X ieme caratctère, remplacer la suite par '...' et ajouter un 'Lire la suite'

    $contentLenght = '';


}

}

