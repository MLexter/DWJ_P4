<?php

namespace JForteroche\Blog\Model;
use \PDO;

require_once(MODEL.'Post.php');
require_once(MODEL.'Comment.php');


class CommentManager 
{

    private $db;



    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=p4_blog_forteroche;charset=utf8', 'root', '');
    }


    public function getComments($ID_chapter)
    {
        $db = $this->db;
        $req = $db->prepare('SELECT ID_comment, author_comment, comment_content, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, id_chapter FROM comments WHERE id_chapter = ? ORDER BY comment_date_fr DESC');
        $req->execute(array($ID_chapter));

        while ($comments = $req->fetch(PDO::FETCH_ASSOC)) {
            $commentData = new Comment();
            $commentData->setId_comment($comments['ID_comment']);
            $commentData->setAuthor_comment($comments['author_comment']);
            $commentData->setContent_comment($comments['comment_content']);
            $commentData->setCreation_date_comment($comments['comment_date_fr']);

            $commentsData[] = $commentData;
        }
        if (isset($commentsData))
        {
        return $commentsData;
        }
    }

    public function createComment($ID_chapter, $author_comment, $content_comment)
    {
        $db = $this->db;
        $req = $db->prepare('INSERT INTO comments(author_comment, comment_content, comment_date, id_chapter) VALUES(?, ?, NOW(), ?)');
        $req->execute(array($author_comment, $content_comment, $ID_chapter));

        $createComment = $req->fetch(PDO::FETCH_ASSOC);   
        $comment = new Comment();
            $comment->setAuthor_comment($createComment['author_comment']);
            $comment->setContent_comment($createComment['comment_content']);
            $comment->setID_chapter($createComment[$ID_chapter]);
       
        return $comment;

    }

    public function deletePostComment($ID_comment)
    {
        $db = $this->db;
        $req = $db->prepare('DELETE FROM comments WHERE ID_comment = ?');
        $deleteComment = $req->execute((array($ID_comment)));

        return $deleteComment;

        
    }

}