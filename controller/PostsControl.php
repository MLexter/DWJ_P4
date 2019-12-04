<?php

require_once(MODEL . 'PostManager.php');
require_once(MODEL . 'CommentManager.php');

class PostsControl
{

    public function getAllPosts()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $posts = $postManager->getPosts();

        $viewToDisplay = new ViewRenderer('listPostsView');
        $viewToDisplay->renderView(array('posts' => $posts));
    }



    public function getPostById()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $commentManager = new \JForteroche\Blog\Model\CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        $viewToDisplay = new ViewRenderer('postView');
        $viewToDisplay->renderView(array('post' => $post, 'comments' => $comments));  
    }



    public function createChapter()
    { 
        if (isset($_POST['author_post_title'], $_POST['author_post_content']))
        {
            if (!empty($_POST['author_post_title']) AND !empty($_POST['author_post_content']))
            {
            $titleChapter = htmlspecialchars($_POST['author_post_title']);
            $contentChapter = htmlspecialchars($_POST['author_post_content']);

            $createContent = new \JForteroche\Blog\Model\PostManager();
            $newEntry = $createContent->newPost($titleChapter, $contentChapter);
            } else {
                echo 'Vous devez donner un titre et un contenu à votre chapitre.';
            }
        }
        header('Location:' . HOST . 'admin/dashboard');
    }
        


    public function updateChapter()
    {
        if ($_POST['author_post_title']) {
            
            $insertContent = new \JForteroche\Blog\Model\PostManager();
            $insertContent->updatePost($_POST['postId'], $_POST['author_post_title'], $_POST['author_post_content']);
            }
            header('Location:' . HOST . 'book');
    }



    public function editChapter()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $post = $postManager->getPost($_GET['id']);
        
        $viewToDisplay = new ViewRenderer('editView');
        $viewToDisplay->renderView(array('post' => $post));
    }



    public function deleteChapter()
    {
        $postId = htmlspecialchars($_GET['id']);

        $postManager = new \JForteroche\Blog\Model\PostManager();
        // Vérifier que l'action de suppression avec un message d'alerte avant de valider le traitement de la suppression du post de la db
        $post = $postManager->deletePost($postId);
        
        header('Location:' . HOST . 'admin/dashboard');
    }

}
