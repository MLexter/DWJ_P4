<?php $title_content = 'Ecrire un nouveau chapitre' ?>


<div id="main-createNewPostView">
    <div id="creation_container" class="text-center container title-section col-sm-12">
        <div class="shadow border p-3 mb-5 bg-white rounded container container-main-title_description col-8">
            <h1>Ecrire un nouveau chapitre</h1>
        </div>
        <p><a href="<?= HOST; ?>admin/dashboard">Retour au menu d'administration</a></p>
        
        <p>Ecrivez un nouveau chapitre et utilisez les outils d'édition de texte à votre disposition pour le mettre en forme. <br>
        Terminez par 'Poster ce chapitre'</p>
        
        <hr class="hr-separation">
        <?php if (@$_SESSION['success'] == 0) : ?>
            <?php if (@$_SESSION['error_upload'] !== "") : ?>
                <div class="alert alert-warning" role="alert"><?= @$_SESSION['error_upload']; ?> </div>
            <?php endif; ?>
        <?php endif; ?>

        <form action="<?= HOST; ?>admin/create-valid" method="POST" enctype="multipart/form-data">
            <div id="inputs-container">
                <label for="post-title">
                    <h3>Titre du chapitre :</h3>
                </label><br />
                <input type="text" class="col-6 text-center" name="author_post_title" value="<?php if (isset($_SESSION['author_post_title'])) {
                                                                                                    echo $_SESSION['author_post_title'];
                                                                                                }; ?>" />
                <br />
                <label for="chapter-content">
                    <h3>Contenu du chapitre:</h3>
                </label>
                <textarea id="authorPostContent" name="author_post_content">
                <?php if (isset($_SESSION['author_post_content'])) {
                    echo $_SESSION['author_post_content'];
                }; ?>
                </textarea>
                <div id="container_image_update">
                    <label for="image_post">
                        <h3>Ajouter une image :</h3>
                    </label>

                    <input type="file" name="image_chapter" />
                </div>
                <div>
                    <button>
                        <a class="btn" href="<?= HOST; ?>admin/dashboard">Annuler</a>
                    </button>
                    <input class="btn btn-info" type="submit" value="Poster ce chapitre" />
                </div>
            </div>
        </form>





    </div>
</div>