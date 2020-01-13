<?php $title_content = 'Administration du blog' ?>

<div id="overlay_admin">

  <div id="main-admin-page" class="container">

    <div class="shadow-sm border sm-12 p-3 mb-5 rounded container-main-title_description" id="admin_banner-main">
      <h1>ADMINISTRATION DU SITE</h1>
    </div>

    <div id="admin_container" class="text-center">
      <h2>Bienvenue dans votre espace de travail</h2>
      <br />
      <p class="container col-md-10">Pour gérer vos chapitres, cliquez sur l'une des options proposées. <br />
      Des raccourcis sont présents dans vos chapitre pour accéder directement à leur gestion. <br />
      Pour accéder rapidement à votre interface d'administration, cliquez sur <span id="espace_admin">'Espace Admin'</span> en bas du site. <br />
    <span id="signalment-text">Commentaires signalés: </span>Si des commentaires sont signalés parmis vos chapitres, vous pourrez les gérer en cliquant dans le lien de la fenêtre d'avertissement.</p>
    </div>

    <hr class="hr-separation">


    <?php if (@$_SESSION['success'] == 1) : ?>
      <div class="alert alert-success container text-center" role="alert">
        <i class="fas fa-check"></i><span class="text-alert"><?= @$_SESSION['success_upload']; ?></span>
      </div>

      <?php @$_SESSION['success'] = 0; ?>
    <?php endif; ?>


    <?php if (@$_SESSION['delete_status'] == 1) : ?>
      <div class="alert alert-success container text-center" role="alert">
        <i class="fas fa-check"></i><span class="text-alert"><?= @$_SESSION['chapter_delete_message']; ?></span>
      </div>

      <?php @$_SESSION['delete_status'] = 0; ?>
    <?php endif; ?>


    <?php if (@$_SESSION['comSignaled'] == 'true') : ?>
      <div id="signaled-container" class="alert alert-danger container text-center" role="alert">
          <i class="fas fa-bullhorn"></i>
        <span class="text-alert">Des commentaires ont été signalés dans vos chapitres. Pour les gérer, <a href="<?= HOST; ?>admin/manage-signalments&amp;signal-comment=1">cliquez ici.</a></span>
      </div>
    <?php endif; ?>

    <?php if (@$_SESSION['delete_status'] == 1) : ?>
      <div class="alert alert-success container text-center" role="alert">
        <i class="fas fa-check"></i><span class="text-alert"><?= @$_SESSION['chapter_delete_message']; ?></span>
      </div>

      <?php @$_SESSION['delete_status'] = 0; ?>
    <?php endif; ?>


    <div id="new_chapter" class="d-flex justify-content-center">
      <a id="new-chapter_button" class="btn btn-lg" href="<?= HOST; ?>admin/create">Ajouter un nouveau chapitre</a>
    </div>

    <br />
<h3 class="text-center">Liste des derniers chapitres publiés</h3>

    <?php if (isset($posts)) : ?>
      <?php foreach ($posts as $post) : ?>
        <div id="container-admin_chapter-list" class="shadow-sm border sm-12 p-3 mb-5 rounded container-main-title_description">
          <div id="thumbnail-post_admin" class="row post_thumbnail d-flex">
            <figure class="col-md-4 img-thumbnail_custom">
              <a href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">
                <img id="admin-thumbnail-chapter_image" class="img-thumbnail" src="<?= HOST; ?>public/images/chapters/<?= $post->getChapter_image(); ?>" name="image_chapter" alt="Illustration du chapitre">
              </a>
            </figure>

            <div id="title-list" class="col p-3">
              <h2 class="thumbail-title">
                <?= htmlspecialchars($post->getAuthor_post_title()); ?> <br />
                <em class="post_time-text">le <?= $post->getDate_post_author(); ?></em>
              </h2>

              <div class="content-chapter">
                <p class="card-text">
                  <?php $dataContent = $post->getAuthor_post_content();

                  if (!empty($dataContent)) : ?>

                    <?php $shorterContent = substr($post->getAuthor_post_content(), 0, 400);
                    echo strip_tags($shorterContent . '...'); ?>
                  <?php endif; ?>
                </p>
              </div>


              <div class="box_menu">
                <a class="fa-main_admin" href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>" title="Voir le chapitre"><i class="far fa-eye"></i></a>
                <a class="fa-main_admin" href="<?= HOST; ?>admin/edit-post&amp;id=<?= $post->getPostId(); ?>" title="Modifier le chapitre"><i class="far fa-edit"></i></a>
                <a class="fa-main_admin" href="<?= HOST; ?>admin/delete-post&amp;id=<?= $post->getPostId(); ?>" title="Supprimer ce chapitre"><i class="far fa-trash-alt"></i></a>
                <a class="fa-main_admin" href="<?= HOST; ?>admin/manage-comments&amp;id=<?= $post->getPostId(); ?>" title="Gérer les commentaires"><i class="fas fa-users"></i></a>
              </div>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    <?php else : ?>

      <div class="alert alert-dark text-center" role="alert">Aucun chapitre ! Commencez à écrire quelque chose !</div>

    <?php endif; ?>
  </div>
</div>