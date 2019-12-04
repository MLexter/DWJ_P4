<?php $title_content = 'Jean Forteroche: Liste des chapitres'; ?>


<div id="main-listPosts" class="container">
    <div id="main-title_description" class="text-center">
        <h1>Billet simple pour l'Alaska</h1>
        <p>Dernières lectures</p>
    </div>

    <?php if (isset($posts)) : ?>

        <?php foreach ($posts as $post) : ?>
        
            <div class="post_thumbnail">
                <h2 id="thumbail-title">
                    <?= $post->getAuthor_post_title(); ?> <br />
                    <em class="post_time-text">le <?= $post->getDate_post_author(); ?></em>
                </h2>
                <p>

                    <?php
                        $dataContent = $post->getAuthor_post_content();
                        if (!empty($dataContent)) 
                        {
                            if (strlen($dataContent) > 500) 
                            {
                                $shorterContent = substr($dataContent, 0, 500);
                                echo $shorterContent . '...';
                            } else {
                                echo $dataContent;
                            }
                        } 
                        ?>
                </p>
                <br />
                <div class="d-flex justify-content-end">
                    <button class="btn btn-info"><a id="readmore-link" class="text-decoration-none" href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">Lire ce chapitre</a>
                </div>
            </div>
                <?php endforeach; ?>
            <?php else : ?>
</div>
                        
        <div class="alert alert-dark text-center" role="alert">Aucun chapitre à afficher !</div>
                        
    <?php endif; ?>             
