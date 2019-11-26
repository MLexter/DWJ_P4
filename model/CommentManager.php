<?php

namespace JForteroche\Blog\Model;
use \PDO;

require_once(MODEL.'Post.php');

class CommentManager extends Post
{

    private $db;



    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=p4_blog_forteroche;charset=utf8', 'root', '');
    }


    public function getComments($ID_post)
    {
        $db = $this->db;
        $comments = $db->prepare('SELECT ID_post, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($ID_post));

        return $comments;
    }

    public function getComment($id)
    {
        $db = $this->db;
        $req = $db->prepare('SELECT ID_post, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ?');
        $req->execute(array($id));
        $comment = $req->fetch();
 
        return $comment;
    }

    public function postComment($ID_post, $author, $comment)
    {
        $db = $this->db;
        $comments = $db->prepare('INSERT INTO comments(ID_post, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($ID_post, $author, $comment));

        return $affectedLines;
    }


    /*public function updateComment($id, $comment)
    {
        $db = $this->db;
        $req = $db->prepare('UPDATE comments SET comment = ?, comment_date = NOW() WHERE id = ?');
        $newComment = $req->execute(array($comment, $id));
 
        return $newComment;
    }
    */
}