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
        $req = $db->prepare('SELECT ID_post, author_post_title, author_post_content, DATE_FORMAT(date_post_author, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts_author WHERE ID_post = :id');
        $req->bindValue('id', $postId, PDO::PARAM_INT);
        $req->execute();

        $post = $req->fetch(PDO::FETCH_ASSOC);
        $chapter = new Post();
            $chapter->setPostId($post['ID_post']);
            $chapter->setAuthor_post_title($post['author_post_title']);
            $chapter->setAuthor_post_content($post['author_post_content']);
            $chapter->setDate_post_author($post['creation_date_fr']);

        return $chapter;
    }

    public function newPost($author_post_title, $author_post_content)
    {
        $db = $this->db;
        $req = $db->prepare('INSERT INTO posts_author(date_post_author, author_post_title, author_post_content) VALUES (NOW(),?,?)');


        $req->execute(array($author_post_title, $author_post_content));
 
        $createPost = $req->fetch(PDO::FETCH_ASSOC);
        $chapter = new Post();
            $chapter->setPostId($createPost['ID_post']);
            $chapter->setAuthor_post_title($createPost['author_post_title']);
            $chapter->setAuthor_post_content($createPost['author_post_content']);
            $chapter->setDate_post_author($createPost['creation_date_fr']);


        return $chapter;
    }

    public function updatePost($postId, $author_post_title, $author_post_content)
    {
        $db = $this->db;
        $req = $db->prepare('UPDATE posts_author SET author_post_title = ?, author_post_content = ?, date_post_author = NOW() WHERE ID_post = ?');
        $updatedPost = $req->execute(array($author_post_title, $author_post_content, $postId));

        return $updatedPost;
    }

    public function deletePost($postId)
    {
        $db = $this->db;
        $req = $db->prepare('DELETE FROM posts_author WHERE ID_post = ?');
        $req->execute(array($postId));
    }
}
