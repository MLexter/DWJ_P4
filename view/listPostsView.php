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
                    <?= htmlspecialchars($post->getAuthor_post_title()); ?> <br />
                    <em class="post_time-text">le <?= $post->getDate_post_author(); ?></em>
                </h2>
                <p>
                <?php nl2br(htmlspecialchars($post->getAuthor_post_content())); ?>

                    <?php
                        $dataContent = $post->getAuthor_post_content();
                        if (!empty($dataContent)) 
                        {
                            if (strlen($dataContent) > 350) 
                            {
                                $shorterContent = substr($dataContent, 0, 500);
                                echo $shorterContent . '...';
                            };
                        } 
                        ?>
                </p>
                <br />
                <div class="d-flex justify-content-end">
                    <button class="btn btn-info"><a id="readmore-link" class="text-decoration-none" href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">Lire la suite</a>
                </div>
            </div>
                <?php endforeach; ?>
            <?php else : ?>
</div>
                        
        <div class="alert alert-dark text-center" role="alert">Aucun chapitre à afficher !</div>
                        
    <?php endif; ?>             
