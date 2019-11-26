<?php

namespace JForteroche\Blog\Model;
use \PDO;



class PostManager
{

    private $db;



    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=p4_blog_forteroche;charset=utf8', 'root', '');
    }



    public function getPosts()
    {
        $db = $this->db;
        $req = $db->prepare('SELECT ID_post, author_post_title, author_post_content, DATE_FORMAT(date_post_author, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts_author ORDER BY date_post_author DESC LIMIT 0, 5');
        $req->execute();

        while ($posts = $req->fetch(PDO::FETCH_ASSOC)) {
            $chapter = new Post();
            $chapter->setPostId($posts['ID_post']);
            $chapter->setAuthor_post_title($posts['author_post_title']);
            $chapter->setAuthor_post_content($posts['author_post_content']);
            $chapter->setDate_post_author($posts['creation_date_fr']);

            $chapters[] = $chapter;
        };

        return $chapters;
    }

    public function getPost($postId)
    {
        $db = $this->db;
        $req = $db->prepare('SELECT ID_post, author_post_title, author_post_content, DATE_FORMAT(date_post_author, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts_author WHERE ID_post = ?');
        $req->execute(array($postId));

        $post = $req->fetch();

        return $post;
    }

    public function createPost($postId, $author_post_title, $author_post_content)
    {
        $db = $this->db;
        $req = $db->prepare('INSERT INTO posts_author(ID_post, date_post_author, author_post_title, author_post_content) VALUES (?,NOW(),?,?)');
        $newEntry = $req->execute(array($postId, $author_post_title, $author_post_content));

        return $newEntry;
    }

    public function updatePost($postId)
    {
        $db = $this->db;
        $req = $db->prepare('UPDATE posts_author SET author_post_title = ?, author_post_content = ?, date_post_author = NOW() WHERE ID_post = ?');
        $updatedPost = $req->execute(array($postId));

        return $updatedPost;
    }

    public function deleteAuthorPost($postId)
    {
        $db = $this->db;
        $req = $db->execute('DELETE FROM `posts_author` WHERE `posts_author`.`ID_post` = $ID_post');
    }
}
