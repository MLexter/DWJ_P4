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
        $viewToDisplay->renderView(array('post' => $post));  
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
                echo 'Vous donner un titre et un contenu à votre chapitre.';
            }
        }
        header('Location:' . HOST . 'admin');
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

    
}
