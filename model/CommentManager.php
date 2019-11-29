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


    public function getComments($ID_comment)
    {
        $db = $this->db;
        $comments = $db->prepare('SELECT ID_comment, author_comment, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($ID_comment));

        return $comments;
    }

    public function getComment($id)
    {
        $db = $this->db;
        $req = $db->prepare('SELECT ID_comment, author_comment, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id = ?');
        $req->execute(array($id));
        $comment = $req->fetch();
 
        return $comment;
    }

    public function createComment($ID_comment, $author_comment, $content_comment)
    {
        $db = $this->db;
        $comments = $db->prepare('INSERT INTO comments(ID_comment, author_comment, comment_content, comment_date) VALUES(?, ?, ?, NOW())');

        $newEntry = $comments->execute(array($ID_comment, $author_comment, $content_comment));

        $createComment = $comments->fetch(PDO::FETCH_ASSOC);
        $comment = new Comment();
            $comment->setID_comment($createComment['ID_comment']);
            $comment->setAuthor_comment($createComment['author_comment']);
            $comment->setContent_comment($createComment['content_comment']);
            $comment->setComment_date($createComment['creation_date_fr']);


        return $createComment;

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