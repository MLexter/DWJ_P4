<?php

// Chargement des classes

// use OpenClassrooms\Blog\Model\PostManager;

require_once(MODEL . 'PostManager.php');
require_once(MODEL . 'CommentManager.php');

class PostsControl
{
    
    private $postId;
    private $author_post_title;
    private $author_post_content;
    private $date_post_author;



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

    /**
     * Get the value of postId
     */ 
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set the value of postId
     *
     * @return  self
     */ 
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get the value of author_post_title
     */ 
    public function getAuthor_post_title()
    {
        return $this->author_post_title;
    }

    /**
     * Set the value of author_post_title
     *
     * @return  self
     */ 
    public function setAuthor_post_title($author_post_title)
    {
        $this->author_post_title = $author_post_title;

        return $this;
    }

    /**
     * Get the value of author_post_content
     */ 
    public function getAuthor_post_content()
    {
        return $this->author_post_content;
    }

    /**
     * Set the value of author_post_content
     *
     * @return  self
     */ 
    public function setAuthor_post_content($author_post_content)
    {
        $this->author_post_content = $author_post_content;

        return $this;
    }

    /**
     * Get the value of date_post_author
     */ 
    public function getDate_post_author()
    {
        return $this->date_post_author;
    }

    /**
     * Set the value of date_post_author
     *
     * @return  self
     */ 
    public function setDate_post_author($date_post_author)
    {
        $this->date_post_author = $date_post_author;

        return $this;
    }
}
