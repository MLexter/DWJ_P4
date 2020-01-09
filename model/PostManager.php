<?php

namespace JForteroche\Blog\Model;
use \PDO;



class PostManager
{

    private $db;



    public function __construct()
    {
        $this->db = new PDO('mysql:host=db5000248792.hosting-data.io;dbname=dbs243022;charset=utf8', 'dbu406069', 'IOlexter!87');
    }



    public function getPosts()
    {
        $db = $this->db;
        $req = $db->prepare('SELECT ID_post, author_post_title, author_post_content, image_chapter, DATE_FORMAT(date_post_author, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts_author ORDER BY date_post_author DESC');
        $req->execute();

        while ($posts = $req->fetch(PDO::FETCH_ASSOC)) {
            $chapter = new Post();
            $chapter->setPostId($posts['ID_post']);
            $chapter->setAuthor_post_title($posts['author_post_title']);
            $chapter->setAuthor_post_content($posts['author_post_content']);
            $chapter->setChapter_image($posts['image_chapter']);
            $chapter->setDate_post_author($posts['creation_date_fr']);

            $chapters[] = $chapter;
        };
        if (isset($chapters)) 
        {
            return $chapters;
        }
    }


    public function getPost($postId)
    {
        $db = $this->db;
        $req = $db->prepare('SELECT ID_post, author_post_title, author_post_content, image_chapter, DATE_FORMAT(date_post_author, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts_author WHERE ID_post = :id');
        $req->bindValue('id', $postId, PDO::PARAM_INT);
        $req->execute();

        $post = $req->fetch(PDO::FETCH_ASSOC);
        $chapter = new Post();
            $chapter->setPostId($post['ID_post']);
            $chapter->setAuthor_post_title($post['author_post_title']);
            $chapter->setAuthor_post_content($post['author_post_content']);
            $chapter->setChapter_image($post['image_chapter']);
            $chapter->setDate_post_author($post['creation_date_fr']);

        return $chapter;
    }

    public function quickPostEdit($postId, $titleChapter, $contentChapter)
    {
        $db = $this->db;
        $req = $db->prepare('UPDATE posts_author SET author_post_title = ?, author_post_content = ?, date_post_author_modif = NOW() WHERE ID_post = ?');
        $quickUpdate = $req->execute(array($titleChapter, $contentChapter, $postId));

        return $quickUpdate;
    }

    public function newPost($titleChapter, $contentChapter, $newImageFile)
    {
        $db = $this->db;
        $req = $db->prepare('INSERT INTO posts_author(date_post_author, author_post_title, author_post_content, image_chapter) VALUES (NOW(),?,?,?)');


        $req->execute(array($titleChapter, $contentChapter, $newImageFile));

        $createPost = $req->fetch(PDO::FETCH_ASSOC);
        $chapter = new Post();
            $chapter->setPostId($createPost['ID_post']);
            $chapter->setAuthor_post_title($createPost['author_post_title']);
            $chapter->setAuthor_post_content($createPost['author_post_content']);
            $chapter->setChapter_image($createPost['image_chapter']);
            $chapter->setDate_post_author($createPost['creation_date_fr']);
            $chapter->setDate_post_author_modif($createPost['date_post_author_modif']);

        return $chapter;
    }

    public function updatePost($postId, $author_post_title, $author_post_content, $newImageFile)
    {
        $db = $this->db;
        $req = $db->prepare('UPDATE posts_author SET author_post_title = ?, author_post_content = ?, date_post_author_modif = NOW(), image_chapter = ? WHERE ID_post = ?');
        $updatedPost = $req->execute(array($author_post_title, $author_post_content, $newImageFile, $postId));

        return $updatedPost;
    }

    public function deletePost($postId)
    {
        $db = $this->db;
        $req = $db->prepare('DELETE FROM posts_author WHERE ID_post = ?');
        $req->execute(array($postId));
    }
}
