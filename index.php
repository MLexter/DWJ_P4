

<?php
session_start();

require('_config.php');

require('controller/staticControl.php');
require('controller/postControl.php');
require('controller/adminControl.php'); 


try {

    if (!empty($_GET['action'])) {
        switch ($_GET['action']) {
            case 'listPosts':
                listPosts();
                break;

            case 'post':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    post();
                    break;
                } else {
                    throw new Exception('Aucun identifiant de billet envoyé');
                }

            case 'aboutView':
                showAboutView();
                break;

            case 'contactView':
                showContactView();
                break;

            case 'commentView':
                showCommentView();
                break;

            case 'addComment':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                        addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                    } else {
                        // Autre exception
                        throw new Exception('Tous les champs ne sont pas remplis !');
                    }
                }

            case 'connexionView':
                showConnexionView();
                break;

            case 'editView':
                showEditView();
                break;


            case 'postEdit':
                modifyAuthorPost($_POST['author_post_content']);
                break;

            default:
                echo 'Erreur: aucune valeur pour le paramètre "action"';
        }
    } else {
        showMainIndex();
    }

    /*if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        if ($_GET['action'] == 'aboutView') {
            showAboutView();
        }
        if ($_GET['action'] == 'contactView') {
            showContactView();
        }
    } else {
        showMainIndex();
    }*/
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
