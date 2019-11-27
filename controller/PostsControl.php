<?php

// Chargement des classes

// namespace JForteroche\Blog\Model;

require_once(MODEL . 'PostManager.php');
require_once(MODEL . 'CommentManager.php');

class PostsControl
{

    public function getAllPosts()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $posts = $postManager->getPosts();

        $viewToDisplay = new ViewRenderer('listPostsView');
        $viewToDisplay->renderView($posts);
        // require(VIEW . '/listPostsView.php');
    }

    public function getPostById()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $commentManager = new \JForteroche\Blog\Model\CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        $viewToDisplay = new ViewRenderer('postView');
        $viewToDisplay->renderView($post);
        // var_dump($post); exit();
        // require(VIEW . '/postView.php');
    }


    public function createPost()
    { 
        $manageContent = new Post();
        $newEntry = $manageContent->createChapter();
    }



    public function updateChapter()
    {
        if ($_POST['author_post_title']) {
            
            echo $_POST['author_post_title'];

            $insertContent = new \JForteroche\Blog\Model\PostManager();
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
