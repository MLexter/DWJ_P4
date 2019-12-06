<?php $title_content = 'Modifier un chapitre' ?>


<div id="main-editView">
    <div id="edit_container" class="container text-center">
        <h1>Modifier un chapitre</h1>
        <p><a href="<?= HOST; ?>">Retour à l'écran principal</a></p>

        <p>Saisissez vos modifications dans l'espace de rédaction et cliquez sur le bouton 'Valider' pour modifier votre article.</p>

        <form action="<?= HOST; ?>admin/post-update" method="POST">
            <div>
                <input type="hidden" name="postId" value="<?= $post->getPostId(); ?>">
                <label for="post-title" ><h3>Titre du chapitre :</h3></label><br />
                <input type="text" name="author_post_title" value="<?= $post->getAuthor_post_title(); ?>" required>
                <br />
                <label for="chapter-content"><h3>Contenu du chapitre:</h3></label>
                <textarea id="authorPostContent" name="author_post_content" required><?= $post->getAuthor_post_content(); ?></textarea>
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


