<?php

$title_content = 'Ecrire un nouveau chapitre' ?>


<div id="main-createNewPostView">
    <div id="creation_container">
        <h1>Ecrire un nouveau chapitre</h1>
        <p><a href="<?= HOST; ?>admin/dashboard">Retour au menu d'administration</a></p>

        <p>Ecrivez un nouveau chapitre et utilisez les outils d'édition de texte à votre disposition pour le mettre en forme.</p>
        <p>Terminez par 'Poster ce chapitre';</p>

        <form action="<?= HOST; ?>admin/create-valid" method="POST">
            <div>
                <label for="post-title" ><h3>Titre du chapitre :</h3></label>
                <input type="text" name="author_post_title" required>
                <br />
                <label for="chapter-content"><h3>Contenu du chapitre:</h3></label>
                <textarea id="authorPostContent" name="author_post_content" required></textarea>
            </div>
            <div>
                <button>
                    <a href="<?= HOST; ?>admin">Annuler</a>
                </button> 
                <input type="submit" value="Poster ce chapitre" />
            </div>
        </form>
    </div>
</div>


