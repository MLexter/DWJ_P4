<?php

namespace JForteroche\Blog\Model;

require_once(MODEL.'Manager.php');

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT ID_post, author, author_post_title, author_post_content, DATE_FORMAT(date_post_author, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts_author ORDER BY date_post_author DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT ID_post, author, author_post_title, author_post_content, DATE_FORMAT(date_post_author, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts_author WHERE ID_post = ?');
        $req->execute(array($postId));

        $post = $req->fetch();

        return $post;
    }

    public function updatePost($postId, $author_post_title, $author_post_content)
    {
        $db = $this->dbConnect();
        $req = $db->execute('UPDATE posts_author SET author_post_title = :author_post_title, author_post_content = :author_post_content, date_post_author = NOW() WHERE ID_post = :id', 
        array('id'                  => $postId,
              'author_post_title'   => $author_post_title,
              'author_post_content' => $author_post_content));
 

    }

    public function addPost($ID_post, $author_post_content)
    {
        $db = $this->dbConnect();
        $newContent = $db->prepare('INSERT INTO posts_author(ID_post, author, author_post_content, date_post_author) VALUES(?, ?, ?, NOW())');
        $affectedLines = $newContent->execute(array($ID_post, $author_post_content));

        return $affectedLines;
    }

    public function deleteAuthorPost($postId) 
    {
        $db = $this->dbConnect();
        $req = $db->execute('DELETE FROM `posts_author` WHERE `posts_author`.`ID_post` = $ID_post');
    }
}

