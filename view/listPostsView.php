<?php $title_content = 'Jean Forteroche: Liste des chapitres'; ?>

<div class="container">

    <div id="main-listPosts" class="container shadow-lg p-3 mb-5 bg-white rounded">
        <div id="main-title_description" class="text-center">
            <h1>Billet simple pour l'Alaska</h1>
            <p>Dernières lectures</p>
        </div>

        <div id="container_list_chapters" class="d-flex justify-content-around container-fluid">

        <?php if (isset($posts)) : ?>
                <?php foreach ($posts as $post) : ?>

                    <div class="card col-5 shadow-sm mb-5 bg-white rounded">
                        
                        <figure>
                            
                            <a href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">
                                <img class="img-thumbnail mx-auto d-block"src="<?= HOST; ?>public/images/chapters/<?= $post->getChapter_image(); ?>" name="image_chapter" alt="Illustration du chapitre" class="card-img-top">
                            </a>
                        </figure>
                <div class="card-body">
                    <h5 class="card-title"><?= $post->getAuthor_post_title(); ?></h5>

                    <em class="post_time-text">le <?= $post->getDate_post_author(); ?></em>

                    <p class="card-text">
                        <?php $dataContent = $post->getAuthor_post_content();

                        if (!empty($dataContent)) : ?>

                            <?php $shorterContent = substr($post->getAuthor_post_content(), 0, 500);
                            echo strip_tags($shorterContent . '...'); ?>
                    </p>

                    <div id="readmore-link" class="d-flex justify-content-end">
                        <a class="text-decoration-none" href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">
                          <button class="btn btn-info">Lire ce chapitre</button>
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
            