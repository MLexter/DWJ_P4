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


        require(VIEW . '/postView.php');
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
        if (isset($_SESSION['isAdmin'])) 
        {
            if ($_SESSION['isAdmin'] == true) 
            {


                $_SESSION['author_post_title'] = "";
                $_SESSION['author_post_content'] = "";


                if (isset($_POST['author_post_title'], $_POST['author_post_content'])) 
                {


                    if (!empty($_POST['author_post_title']) and !empty($_POST['author_post_content'])) 
                    {
                        $titleChapter = $_POST['author_post_title'];
                        $_SESSION['author_post_title'] = $titleChapter;

                        $contentChapter = $_POST['author_post_content'];
                        $_SESSION['author_post_content'] = $contentChapter;

                        if (isset($_FILES['image_chapter']) and !empty($_FILES['image_chapter']['name'])) 
                        {

                            // Define constants to verify uploaded file
                            $maxWeightFile = 2097152;
                            $validExtensions = array('jpg', 'jpeg', 'png', 'gif');
                            $imageInfos = pathinfo($_FILES['image_chapter']['name']);
                            $uploadedExtension = $imageInfos['extension'];
                            $imageFile = '' . time() . '.' . $uploadedExtension;

                            $pathToUpload = ROOT . 'public/images/chapters/';

                            if ($_FILES['image_chapter']['size'] <= $maxWeightFile) 
                            {
                                if (in_array($uploadedExtension, $validExtensions)) 
                                {
                                    $imageChapter = move_uploaded_file($_FILES['image_chapter']['tmp_name'], $pathToUpload . $imageFile);

                                    if ($imageChapter) 
                                    {
                                        $newImageFile = $imageFile;
                                        $createContent = new \JForteroche\Blog\Model\PostManager();
                                        $newEntry = $createContent->newPost($titleChapter, $contentChapter, $newImageFile);

                                        $_SESSION['success'] = 1;
                                        $_SESSION['success_upload'] = 'Votre chapitre a été publié avec succès !';
                                        $_SESSION['author_post_title'] = "";
                                        $_SESSION['author_post_content'] = "";
                                        header('Location: ' . HOST . 'admin/dashboard');
                                    }
                                } else {
                                    $_SESSION['success'] = 0;
                                    header('Location: ' . HOST . 'admin/create');
                                    $_SESSION['error_upload'] = 'Votre photo doit être au format jpg, jpeg ou png.';
                                    exit();
                                }
                            } else {
                                $_SESSION['success'] = 0;
                                header('Location: ' . HOST . 'admin/create');
                                $_SESSION['error_upload'] = 'Votre photo ne doit pas dépaser 2Mo.';
                                exit();
                            }
                        } else {
                            $_SESSION['success'] = 0;
                            header('Location: ' . HOST . 'admin/create');
                            $_SESSION['error_upload'] = 'Vous devez sélectionner une image à joindre à votre chapitre.';
                            exit();
                        }
                    } else {
                        $_SESSION['success'] = 0;
                        header('Location: ' . HOST . 'admin/create');
                        $_SESSION['error_upload'] = 'Vous devez donner un titre, un contenu et une image à votre chapitre.';
                        exit();
                    }
                }
            } else {
                header('Location: ' . HOST . 'connexion');
            }
        }
    }



    public function updateChapter()
    {
        if (isset($_SESSION['isAdmin'])) 
        {
            if ($_SESSION['isAdmin'] == true) 
            {

                if (isset($_POST['submit_edited_chapter'])) {
                    if (isset($_POST['author_post_title'], $_POST['author_post_content'])) 
                    {
                        if (!empty($_POST['author_post_title']) and !empty($_POST['author_post_content'])) 
                        {
                            $titleChapter = $_POST['author_post_title'];
                            $_SESSION['author_post_title'] = $_POST['author_post_title'];

                            $contentChapter = $_POST['author_post_content'];
                            $_SESSION['auhtor_post_content'] = $_POST['author_post_content'];

                            if (isset($_FILES['image_chapter']) and !empty($_FILES['image_chapter']['name'])) 
                            {

                                // Define constants to verify uploaded file
                                $maxWeightFile = 2097152;
                                $validExtensions = array('jpg', 'jpeg', 'png', 'gif');
                                $imageInfos = pathinfo($_FILES['image_chapter']['name']);
                                $uploadedExtension = $imageInfos['extension'];
                                $imageFile = '' . time() . '.' . $uploadedExtension;

                                $pathToUpload = ROOT . 'public/images/chapters/';

                                if ($_FILES['image_chapter']['size'] <= $maxWeightFile) 
                                {
                                    if (in_array($uploadedExtension, $validExtensions)) 
                                    {
                                        $imageChapter = move_uploaded_file($_FILES['image_chapter']['tmp_name'], $pathToUpload . $imageFile);

                                        if ($imageChapter) {
                                            $newImageFile = $imageFile;
                                            $insertContent = new \JForteroche\Blog\Model\PostManager();
                                            $insertContent->updatePost($_POST['postId'], $titleChapter, $contentChapter, $newImageFile);

                                            $_SESSION['success'] = 1;
                                            $_SESSION['success_upload'] = 'Votre chapitre a été modifié avec succès !';
                                            $_SESSION['author_post_title'] = null;
                                            $_SESSION['author_post_content'] = null;
                                            header('Location:' . HOST . 'admin/dashboard');
                                        }
                                    } else {
                                        $_SESSION['success'] = 0;
                                        header('Location: ' . HOST . 'admin/edit-post&id=' . $_SESSION['id_chapter']);
                                        $_SESSION['error_upload'] = 'Votre photo doit être au format jpg, jpeg ou png.';
                                        exit();
                                    }
                                } else {
                                    $_SESSION['success'] = 0;
                                    header('Location: ' . HOST . 'admin/edit-post&id=' . $_SESSION['id_chapter']);
                                    $_SESSION['error_upload'] = 'Votre photo ne doit pas dépaser 2Mo.';
                                    exit();
                                }
                            } else {
                                $_SESSION['success'] = 0;
                                header('Location: ' . HOST . 'admin/edit-post&id=' . $_SESSION['id_chapter']);
                                $_SESSION['error_upload'] = 'Vous devez sélectionner une image à joindre à votre chapitre.';
                                exit();
                            }
                        } else {
                            $_SESSION['success'] = 0;
                            header('Location: ' . HOST . 'admin/edit-post&id=' . $_SESSION['id_chapter']);
                            $_SESSION['error_upload'] = 'Vous devez donner un titre, un contenu et une image à votre chapitre.';
                            exit();
                        }
                    }
                }
            } else {
                $_SESSION['success'] = 0;
                header('Location: ' . HOST . 'connexion');
                exit();
            }
        }
    }


    public function editChapter()
    {
        if (isset($_SESSION['isAdmin'])) 
        {
            if ($_SESSION['isAdmin'] = true) 
            {

                $postManager = new \JForteroche\Blog\Model\PostManager();
                $post = $postManager->getPost($_GET['id']);
                $_SESSION['id_chapter'] = $_GET['id'];

                $viewToDisplay = new ViewRenderer('editView');
                $viewToDisplay->renderView(array('post' => $post));

            } else {
                header('Location: ' . HOST . 'connexion');
            }
        }
    }



    public function deleteChapter()
    {
        if (isset($_SESSION['isAdmin'])) 
        {

            $_SESSION['delete_status'] = 0;

            if ($_SESSION['isAdmin'] = true) 
            {

                $id = htmlspecialchars($_GET['id']);

                $postManager = new \JForteroche\Blog\Model\PostManager();
                // Vérifier que l'action de suppression avec un message d'alerte avant de valider le traitement de la suppression du post de la db
                $post = $postManager->deletePost($id);

                header('Location:' . HOST . 'admin/dashboard');
                $_SESSION['delete_status'] = 1;
                $_SESSION['chapter_delete_message'] = 'Le chapitre a été supprimé avec succès !';
            }
        } else {
            header('Location: ' . HOST . 'connexion');
        }
    }
}
