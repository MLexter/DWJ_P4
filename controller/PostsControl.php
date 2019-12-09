<?php

require_once(MODEL . 'PostManager.php');
require_once(MODEL . 'CommentManager.php');

class PostsControl
{

    public function getAllPosts()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $posts = $postManager->getPosts();

        $viewToDisplay = new ViewRenderer('listPostsView');
        $viewToDisplay->renderView(array('posts' => $posts));
    }



    public function getPostById()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $commentManager = new \JForteroche\Blog\Model\CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        $viewToDisplay = new ViewRenderer('postView');
        $viewToDisplay->renderView(array('post' => $post, 'comments' => $comments));
    }



    public function createChapter()
    {
        if (isset($_POST['author_post_title'], $_POST['author_post_content'])) 
        {
            if (!empty($_POST['author_post_title']) and !empty($_POST['author_post_content'])) 
            {

                if (isset($_FILES['image_chapter']) and !empty($_FILES['image_chapter']['name'])) 
                {

                    // Définition des constantes
                    $maxWeightFile = 2097152;
                    $validExtensions = array('jpg', 'jpeg', 'png');
                    $imageInfos = pathinfo($_FILES['image_chapter']['name']);
                    $uploadedExtension = $imageInfos['extension'];
                    $imageName = $imageInfos['filename'];
                    $imageFile = '' . time() . '.' . $uploadedExtension;

                    $pathToUpload = ROOT . 'public/images/chapters/';

                    if ($_FILES['image_chapter']['size'] <= $maxWeightFile) 
                    {


                        if (in_array($uploadedExtension, $validExtensions)) 
                        {

                            
                            $imageChapter = move_uploaded_file($_FILES['image_chapter']['tmp_name'], $pathToUpload . $imageFile);
                            
                            if ($imageChapter)
                            {
                                
                                $titleChapter = htmlspecialchars($_POST['author_post_title']);
                                $contentChapter = htmlspecialchars($_POST['author_post_content']);
                                $newImageFile = $imageFile;

                                $createContent = new \JForteroche\Blog\Model\PostManager();
                                $newEntry = $createContent->newPost($titleChapter, $contentChapter, $newImageFile);
                            }
                            
                        } else {

                            header('Location: ' . HOST . 'admin/create');
                            $_SESSION['error_upload'] = 'Votre photo doit être au format jpg, jpeg ou png.';
                            exit();
                        }
                    } else {

                        header('Location: ' . HOST . 'admin/create');
                        $_SESSION['error_upload'] = 'Votre photo ne doit pas dépaser 2Mo.';
                        exit();
                    }
                } else {

                    header('Location: ' . HOST . 'admin/create');
                    $_SESSION['error_upload'] = 'Vous devez sélectionner une image à joindre à votre chapitre.';
                    exit();
                }
            } else {

                header('Location: ' . HOST . 'admin/create');
                $_SESSION['error_upload'] = 'Vous devez donner un titre, un contenu et une image à votre chapitre.';
                exit();
            }  
        }
        header('Location:' . HOST . 'admin/dashboard');
        $_SESSION['success_upload'] = 'Votre photo a été transférée avec succès !';
    }



    public function updateChapter()
    {
        if ($_POST['author_post_title']) 
        {

            $insertContent = new \JForteroche\Blog\Model\PostManager();
            $insertContent->updatePost($_POST['postId'], $_POST['author_post_title'], $_POST['author_post_content']);
        }
        header('Location:' . HOST . 'book');
    }



    public function editChapter()
    {
        $postManager = new \JForteroche\Blog\Model\PostManager();
        $post = $postManager->getPost($_GET['id']);

        $viewToDisplay = new ViewRenderer('editView');
        $viewToDisplay->renderView(array('post' => $post));
    }



    public function deleteChapter()
    {
        $postId = htmlspecialchars($_GET['id']);

        $postManager = new \JForteroche\Blog\Model\PostManager();
        // Vérifier que l'action de suppression avec un message d'alerte avant de valider le traitement de la suppression du post de la db
        $post = $postManager->deletePost($postId);

        header('Location:' . HOST . 'admin/dashboard');
    }
}
