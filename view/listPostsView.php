<?php $title_content = 'Jean Forteroche: Liste des chapitres'; ?>

<div class="col-12">

    <div id="main-listPosts" class="container rounded">
        <div class="shadow-sm border p-3 mb-5 bg-white rounded container-main-title_description">
            <div id="main-title_description" class="text-center title-section">
                <h1>BILLET SIMPLE POUR L'ALASKA</h1>
                <h2>Dernières lectures</h2>
            </div>

        </div>
        <p class="text-center regular-subtitle-text container col-md-9">Retrouvez ici la liste de tous les chapitres publiés sur le roman 'Billet simple pour l'Alaska'. <br />
            N'hésitez pas vous exprimer dans l'espace commentaire des chapitres afin de laisser votre ressenti à l'auteur !</p>

        <hr class="hr-separation">

        <div id="container_list_chapters" class="d-flex justify-content-around container-fluid">

            <?php if (isset($posts)) : ?>
                <?php foreach ($posts as $post) : ?>

                    <div id="card-container" class="card col-lg-5 sm-12 shadow-sm bg-white rounded">

                        <figure class="illustration-thumbnail">

                            <a href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">
                               
                                    <span id="title_img" class="txt_illustration d-flex justify-content-center align-items-center">
                                        <?= $post->getAuthor_post_title(); ?>
                                    </span>
                                
                                <img class="img-thumbnail mx-auto d-block" src="<?= HOST; ?>public/images/chapters/<?= $post->getChapter_image(); ?>" name="image_chapter" alt="Illustration du chapitre" class="card-img-top">
                            </a>

                        </figure>
                        <hr class="bottom-border">
                        <div class="card-body">
                            <h3 class="card-title"><?= $post->getAuthor_post_title(); ?></h3>

                            <em class="post_time-text">le <?= $post->getDate_post_author(); ?></em>

                            <p class="card-text">
                                <?php $dataContent = $post->getAuthor_post_content();

                                if (!empty($dataContent)) : ?>

                                    <?php $shorterContent = substr($post->getAuthor_post_content(), 0, 400);
                                    echo strip_tags($shorterContent . '...'); ?>
                            </p>

                            <div id="readmore-link" class="d-flex justify-content-end">
                                <a class="text-decoration-none" href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">
                                    <button class="btn btn-info">Lire la suite</button>
                                </a>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="alert alert-dark text-center" role="alert">Aucun chapitre à afficher !</div>

            <?php endif; ?>

        </div>
    </div>
</div>
<!-- A SUPPRIMER SI PARTIE SUPERIEURE OK -->