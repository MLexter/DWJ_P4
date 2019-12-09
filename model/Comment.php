<?php

namespace JForteroche\Blog\Model;

class Comment
{
    private $ID_chapter;
    private $id_comment;
    private $author_comment;
    private $content_comment;
    private $creation_date_comment;
    private $signaledComment;

    

    /**
     * Get the value of ID_chapter
     */ 
    public function getID_chapter()
    {
        return $this->ID_chapter;
    }

    /**
     * Set the value of ID_chapter
     *
     * @return  self
     */ 
    public function setID_chapter($ID_chapter)
    {
        $this->ID_chapter = $ID_chapter;

        return $this;
    }

    /**
     * Get the value of author_comment
     */ 
    public function getAuthor_comment()
    {
        return $this->author_comment;
    }

    /**
     * Set the value of author_comment
     *
     * @return  self
     */ 
    public function setAuthor_comment($author_comment)
    {
        $this->author_comment = $author_comment;

        return $this;
    }

    /**
     * Get the value of content_comment
     */ 
    public function getContent_comment()
    {
        return $this->content_comment;
    }

    /**
     * Set the value of content_comment
     *
     * @return  self
     */ 
    public function setContent_comment($content_comment)
    {
        $this->content_comment = $content_comment;

        return $this;
    }

    /**
     * Get the value of creation_date_comment
     */ 
    public function getCreation_date_comment()
    {
        return $this->creation_date_comment;
    }

    /**
     * Set the value of creation_date_comment
     *
     * @return  self
     */ 
    public function setCreation_date_comment($creation_date_comment)
    {
        $this->creation_date_comment = $creation_date_comment;

        return $this;
    }

    /**
     * Get the value of id_comment
     */ 
    public function getId_comment()
    {
        return $this->id_comment;
    }

    /**
     * Set the value of id_comment
     *
     * @return  self
     */ 
    public function setId_comment($id_comment)
    {
        $this->id_comment = $id_comment;

        return $this;
    }

    /**
     * Get the value of signaledComment
     */ 
    public function getSignaledComment()
    {
        return $this->signaledComment;
    }

    /**
     * Set the value of signaledComment
     *
     * @return  self
     */ 
    public function setSignaledComment($signaledComment)
    {
        $this->signaledComment = $signaledComment;

        return $this;
    }
}