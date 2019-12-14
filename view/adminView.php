<?php $title_content = 'Administration du blog' ?>

<div id="main-admin-page">
    <div class="container text-center" id="admin_banner-main">
        <h1>ADMINISTRATION DU BLOG</h1>
    </div>

    <div id="admin_container" class="text-center">
        <h1>Bienvenue Jean Forteroche</h1>
        <br />
        <p>Pour administrer vos pages, accédez aux options en face de vos chapitres.</p>
        <p>Voici la liste de vos derniers chapitres publiés.</p>
    </div>

    <?php if (@$_SESSION['success'] == 1) : ?>
            <div class="alert alert-success container text-center" role="alert"><i class="fas fa-check"></i><?= $_SESSION['success_upload']; ?> </div>
            <?php @$_SESSION['success'] = 0; ?>
    <?php endif; ?>

    <?php if ($_SESSION['comSignaled'] == true) : ?>
        <div class="alert alert-danger container text-center" role="alert">
            <i class="fas fa-bullhorn"></i>
            Des commentaires ont été signalés dans vos chapitres. <br />
            Pour accéder à la liste, <a href="<?= HOST; ?>admin/manage-signalments&amp;signal-comment=1">cliquez ici.</a>
        </div>
    <?php endif; ?>



    <div id="new_chapter" class="d-flex justify-content-center">
        <a class="btn btn-primary btn-lg" href="<?= HOST; ?>admin/create">Ajouter un nouveau chapitre</a>
    </div>

    <div id="container-listposts-admin" class="container">

        <?php if (isset($posts)) : ?>
            <?php foreach ($posts as $post) : ?>

                    <div class="post_thumbnail d-flex">
                        <figure>
                            <img id="admin-thumbnail-chapter_image" class="img-thumbnail" src="<?= HOST; ?>public/images/chapters/<?= $post->getChapter_image(); ?>" name="image_chapter" alt="Illustration du chapitre">
                        </figure>

                        <div id="title-list">
                            <h2 id="thumbail-title">
                                <?= htmlspecialchars($post->getAuthor_post_title()); ?>
                            </h2>

                            <a href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">Voir le chapitre</a> | 
                            <a href="<?= HOST; ?>admin/edit-post&amp;id=<?= $post->getPostId(); ?>">Modifier</a> |
                            <a href="<?= HOST; ?>admin/delete-post&amp;id=<?= $post->getPostId(); ?>">Supprimer</a> |
                            <a href="<?= HOST; ?>admin/manage-comments&amp;id=<?= $post->getPostId(); ?>">Gérer les commentaires</a>

                        </div>
                    </div>
            <?php endforeach; ?>
        <?php else : ?>

            <div class="alert alert-dark text-center" role="alert">Aucun chapitre ! Commencez à écrire quelque chose !</div>

        <?php endif; ?>
    </div>
</div>
</div>