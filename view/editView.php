<?php

$title = 'Modifier un chapitre' ?>

<?php ob_start(); ?>

<div id="main-editView">
    <div id="edit_container">
        <h1>Modifier un chapitre</h1>
        <p><a href="<?= HOST; ?>home">Retour à l'écran principal</a></p>

        <p>Saisissez vos modifications dans l'espace de rédaction et cliquez sur le bouton 'Valider' pour modifier votre article.</p>

        <form action="<?= HOST; ?>edit-post/update" method="POST">
            <div>
                <label for="post-title" ><h3>Titre du chapitre :</h3></label>
                <input type="text" name="author_post_title" value="<?= $post['author_post_title'] ?>">
                <br />
                <label for="chapter-content"><h3>Contenu du chapitre:</h3></label>
                <textarea id="authorPostContent" name="author_post_content"><?= $post['author_post_content'] ?></textarea>
            </div>
            <div>
                <button>
                    <a href="<?= HOST; ?>book">Annuler</a>
                </button> 
                <input type="submit" value="Modifier" />
            </div>
        </form>
    </div>
</div>


<?php $body_content = ob_get_clean(); ?>

<?php require(LAYOUTS.'template.php'); ?>