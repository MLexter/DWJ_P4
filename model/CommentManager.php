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


    public function getComments($ID_chapter)
    {
        $db = $this->db;
        $comments = $db->prepare('SELECT author_comment, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, id_chapter FROM comments WHERE id_chapter = ? ORDER BY comment_date_fr DESC');
        $comments->execute(array($ID_chapter));

        return $comments;
    }

    public function getComment($ID_chapter)
    {
        $db = $this->db;
        $req = $db->prepare('SELECT author_comment, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id_chapter = ?');
        $req->execute(array($ID_chapter));
        $comment = $req->fetch();
 
        return $comment;
    }

    public function createComment($ID_chapter, $author_comment, $content_comment)
    {
        $db = $this->db;
        $req = $db->prepare('INSERT INTO comments(author_comment, comment_content, comment_date, id_chapter) VALUES(?, ?, NOW(), ?)');

        $req->execute(array($author_comment, $content_comment, $ID_chapter));

        $createComment = $req->fetch(PDO::FETCH_ASSOC);
        $comment = new Comment();
            $comment->setId_comment($createComment['id_post_comment']);
            $comment->setAuthor_comment($createComment['author_comment']);
            $comment->setContent_comment($createComment['content_comment']);
            
        return $comment;

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