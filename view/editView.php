<?php $title_content = 'Modifier un chapitre' ?>


<div id="main-editView">
    <div id="edit_container" class="container text-center">
        <h1>Modifier un chapitre</h1>
        <p><a href="<?= HOST; ?>admin/dashboard">Retour à l'écran principal</a></p>

        <p>Saisissez vos modifications dans l'espace de rédaction et cliquez sur le bouton 'Valider' pour modifier votre article.</p>

        <form action="<?= HOST; ?>admin/post-update" method="POST" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="postId" value="<?= $post->getPostId(); ?>">
                <label for="post-title">
                    <h3>Titre du chapitre :</h3>
                </label><br />
                <input type="text" name="author_post_title" value="<?php if(isset($_SESSION['author_post_title'])) { echo $_SESSION['author_post_title']; }; ?>" required>
                <br />
                <label for="chapter-content">
                    <h3>Contenu du chapitre:</h3>
                </label>

                <div id="illustration-chapter">
                    <figure>
                        <img id="image-post-chapter" class="img-fluid" src="<?= HOST; ?>public/images/chapters/<?= $post->getChapter_image(); ?>" name="image_chapter" alt="Illustration du chapitre">
                    </figure>
                </div>

                <textarea id="authorPostContent" name="author_post_content" required><?php if(isset($_SESSION['author_post_content'])) { echo $_SESSION['author_post_content']; }; ?></textarea>
                <label for="image_post">Ajouter une image :</label>
                <input type="file" name="image_chapter" />
            </div>
            <div>
                <button>
                    <a href="<?= HOST; ?>book">Annuler</a>
                </button>
                <input type="submit" value="Modifier" />
            </div>
        </form>

        <?php if ($_SESSION['success'] == 1) : ?>
            <div class="alert alert-success" role="alert"><?= $_SESSION['success_upload']; ?> </div>
            <?php elseif ($_SESSION['success'] == 0) : ?>
                <?php if ($_SESSION['error_upload'] !== null) : ?>
                    <div class="alert alert-warning" role="alert"><?= $_SESSION['error_upload']; ?> </div>
                <?php endif; ?>
        <?php endif; ?>

    </div>
</div>