<?php

$title = 'Modifier un chapitre' ?>

<?php ob_start(); ?>

<div id="main-editView">
    <div id="edit_container">
        <h1>Modifier un chapitre</h1>
        <p><a href="index.php">Retour à l'écran principal</a></p>



        <h2>Modifier un chapitre</h2>

        <p>Saisissez vos modifications dans l'espace de rédaction et cliquez sur le bouton 'Valider' pour modifier votre article.</p>

        <form action="index.php?action=postEdit&amp;id=<?= $post['ID_post'] ?>" method="POST">
            <div>
                <p>Auteur : <?= $post['author'] ?></p>
                <textarea id="authorPostContent" name="author_post_content"><?= $post['author_post_content'] ?></textarea>
            </div>
            <div>
                <button>
                    <a href="index.php?action=listPostView">Annuler</a>
                </button> 
                <input type="submit" value="Modifier" />
            </div>
        </form>
    </div>
</div>


<?php $body_content = ob_get_clean(); ?>

<?php require('layouts/template.php'); ?>