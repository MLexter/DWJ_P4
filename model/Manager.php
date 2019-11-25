<?php

namespace JForteroche\Blog\Model;

class Manager
{
    private $postId;
    private $author_post_title;
    private $author_post_content;
    private $date_post_author;

    
    

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