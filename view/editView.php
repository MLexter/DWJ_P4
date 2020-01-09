<?php $title_content = 'Modifier un chapitre' ?>


<div id="main-editView">
    <div id="edit_container" class="container text-center">
        <div class="shadow border p-3 mb-5 bg-white rounded container container-main-title_description col-8">
            <h1>Modifier un chapitre</h1>
        </div>
        <p><a href="<?= HOST; ?>admin/dashboard">Retour à l'écran principal</a></p>

        <hr class="hr-separation">

        <p>Saisissez vos modifications dans l'espace de rédaction et cliquez sur le bouton 'Valider' pour modifier votre article.</p>

        <?php if (@$_SESSION['success'] == 0) : ?>
            <?php if (@$_SESSION['error_upload'] !== null) : ?>
                <div class="alert alert-warning" role="alert"><?= @$_SESSION['error_upload']; ?> </div>
                <?php $_SESSION['error_upload'] = ""; ?>
            <?php endif; ?>
        <?php endif; ?>

        <div id="edit-illustration">
            <figure>
                <img id="image-post-chapter" class="img-fluid" src="<?= HOST; ?>public/images/chapters/<?= $post->getChapter_image(); ?>" name="image_chapter" alt="Illustration du chapitre">
            </figure>
        </div>

        <form action="<?= HOST; ?>admin/post-update" method="POST" enctype="multipart/form-data">
            <div id="edit-form">
                <input type="hidden" name="postId" value="<?= $post->getPostId(); ?>">

                <label for="post-title">
                    <h3>Titre du chapitre :</h3>
                </label><br />
                <input type="text" class="col-6 text-center" name="author_post_title" value="<?= $post->getAuthor_post_title(); ?>" required>
                <br />

                <label for="chapter-content">
                    <h3>Contenu du chapitre:</h3>
                </label>

                <textarea id="authorPostContent" name="author_post_content" required><?= $post->getAuthor_post_content(); ?></textarea>
                <label for="image_post">
                    <h3>Choisir une image:</h3>
                </label>

                <input type="file" name="image_chapter" />
            </div>
            <div id="cancel-submit_btn">
                <button>
                    <a class="btn" href="<?= HOST; ?>admin/dashboard">Annuler</a>
                </button>
                <input class="btn btn-info" type="submit" value="Enregistrer" name="submit_edited_chapter" />
            </div>
        </form>




    </div>
</div>