<?php $title_content = 'Jean Forteroche: Liste des chapitres'; ?>


<div id="main-listPosts" class="container">
    <div id="main-title_description" class="text-center">
        <h1>Billet simple pour l'Alaska</h1>
        <p>Dernières lectures</p>
    </div>

    <?php if (isset($posts)) : ?>
        <?php foreach ($posts as $post) : ?>

            <div class="post_thumbnail d-flex">
                <figure>
                    <a href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">
                        <img id="thumbnail-chapter_image" class="img-thumbnail" src="<?= HOST; ?>public/images/chapters/<?= $post->getChapter_image(); ?>" name="image_chapter" alt="Illustration du chapitre">
                    </a>
                </figure>

                <div id="content_text_thumbnail">

                    <h2 id="thumbail-title">
                        <?= $post->getAuthor_post_title(); ?> <br />
                        <em class="post_time-text">le <?= $post->getDate_post_author(); ?></em>
                    </h2>
                    <p>

                        <?php
                                $dataContent = $post->getAuthor_post_content();
                                if (!empty($dataContent)) {
                                    if (strlen($dataContent) > 300) {
                                        $shorterContent = substr($dataContent, 0, 320);
                                        echo $shorterContent . '...';
                                    } else {
                                        echo $dataContent;
                                    }
                                }
                                ?>
                    </p>
                    <br />
                    <div class="d-flex justify-content-end">
                        <a id="readmore-link" class="text-decoration-none" href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">
                            <button class="btn btn-info">Lire ce chapitre</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
    <?php else : ?>
        <div class="alert alert-dark text-center" role="alert">Aucun chapitre à afficher !</div>
    <?php endif; ?>
</div>
