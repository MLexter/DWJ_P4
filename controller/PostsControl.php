<?php

// Chargement des classes

use OpenClassrooms\Blog\Model\PostManager;

require_once(MODEL . 'PostManager.php');
require_once(MODEL . 'CommentManager.php');

class PostsControl
{

    public function listPosts()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $posts = $postManager->getPosts();

        require(VIEW . '/listPostsView.php');
    }

    public function post()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $commentManager = new \JForteroche\Blog\Model\CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $title_content = htmlspecialchars($post['author_post_title']);
        $comments = $commentManager->getComments($_GET['id']);

        require(VIEW . '/postView.php');
    }


    public function createPost()
    { }



    public function updateChapter()
    {
        if (!empty($_POST['author_post_title']) && !empty($_POST['author_post_content'])) {
   

            $insertContent->updatePost($_GET['id'], $_POST['author_post_title'], $_POST['author_post_content']);

            // if ($insertContent === false) {
                
                //     throw new Exception('Impossible de modifier ce chapitre !');
                
                // }
            }
            header('Location:' . HOST . 'book');
    }

    public function editChapter()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $post = $postManager->getPost($_GET['id']);
        
        require(VIEW.'editView.php');
    }
}
