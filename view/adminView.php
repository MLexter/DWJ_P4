<?php $title_content = 'Administration du blog' ?>

<div id="overlay_admin">

  <div id="main-admin-page" class="container">

    <div class="shadow-sm border sm-12 p-3 mb-5 bg-white rounded container-main-title_description" id="admin_banner-main">
      <h1>ADMINISTRATION DU SITE</h1>
    </div>

    <div id="admin_container" class="text-center">
      <h1>Bienvenue Jean Forteroche !</h1>
      <br />
      <p>Pour gérer vos pages, accédez à l'une des options en face de vos chapitres. <br />
        Voici la liste de vos derniers chapitres publiés.</p>
    </div>

    <?php if (@$_SESSION['success'] == 1) : ?>
      <div class="alert alert-success container text-center" role="alert"><i class="fas fa-check"></i><?= $_SESSION['success_upload']; ?> </div>
      <?php @$_SESSION['success'] = 0; ?>
    <?php endif; ?>


    <?php if (@$_SESSION['delete_status'] == 1) : ?>
      <div class="alert alert-success container text-center" role="alert"><i class="fas fa-check"></i><?= $_SESSION['chapter_delete_message']; ?> </div>
      <?php @$_SESSION['delete_status'] = 0; ?>
    <?php endif; ?>


    <?php if ($_SESSION['comSignaled'] == true) : ?>
      <div class="alert alert-danger container text-center" role="alert">
        <span id="fa-horn">
          <i class="fas fa-bullhorn"></i>
        </span>
        Des commentaires ont été signalés dans vos chapitres. Pour accéder à la liste, <a href="<?= HOST; ?>admin/manage-signalments&amp;signal-comment=1">cliquez ici.</a>
      </div>
    <?php endif; ?>

    <?php if (@$_SESSION['delete_status'] == 1) : ?>
      <div class="alert alert-success container text-center" role="alert"><i class="fas fa-check"></i><?= $_SESSION['chapter_delete_message']; ?> </div>
      <?php @$_SESSION['delete_status'] = 0; ?>
    <?php endif; ?>


    <div id="new_chapter" class="d-flex justify-content-center">
      <a id="new-chapter_button" class="btn btn-lg" href="<?= HOST; ?>admin/create">Ajouter un nouveau chapitre</a>
    </div>


    <?php if (isset($posts)) : ?>
      <?php foreach ($posts as $post) : ?>
        <div id="container-admin_chapter-list" class="shadow-sm border sm-12 p-3 mb-5 bg-white rounded container-main-title_description">
          <div class="row post_thumbnail d-flex">
            <figure class="col-md-8">
              <img id="admin-thumbnail-chapter_image" class="img-thumbnail" src="<?= HOST; ?>public/images/chapters/<?= $post->getChapter_image(); ?>" name="image_chapter" alt="Illustration du chapitre">
            </figure>

            <div id="title-list" class="d-flex justify-content-between col">
              <h2 class="thumbail-title">
                <?= htmlspecialchars($post->getAuthor_post_title()); ?> <br />
                <em class="post_time-text">le <?= $post->getDate_post_author(); ?></em>
              </h2>
              <div class="box_menu">
                <a class="fa-main_admin" href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>" title="Voir le chapitre"><i class="far fa-eye"></i></a>
                <a class="fa-main_admin" href="<?= HOST; ?>admin/edit-post&amp;id=<?= $post->getPostId(); ?>" title="Modifier le chapitre"><i class="far fa-edit"></i></a>
                <a class="fa-main_admin" href="<?= HOST; ?>admin/delete-post&amp;id=<?= $post->getPostId(); ?>" title="Supprimer ce chapitre"><i class="far fa-trash-alt"></i></a>
                <a class="fa-main_admin" href="<?= HOST; ?>admin/manage-comments&amp;id=<?= $post->getPostId(); ?>" title="Gérer les commentaires"><i class="fas fa-users"></i></a>
              </div>
            </div>

            <div class="content-chapter">
              <p class="card-text">
                <?php $dataContent = $post->getAuthor_post_content();

                  if (!empty($dataContent)) : ?>

                      <?php $shorterContent = substr($post->getAuthor_post_content(), 0, 400);
                              echo strip_tags($shorterContent . '...'); ?>
              </p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php else : ?>

      <div class="alert alert-dark text-center" role="alert">Aucun chapitre ! Commencez à écrire quelque chose !</div>

    <?php endif; ?>
  </div>
</div>