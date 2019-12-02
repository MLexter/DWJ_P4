<?php $title_content = 'Jean Forteroche: Liste des chapitres'; ?>


<div id="main-listPosts">
    <div id="main-title_description" class="container col-5">
        <h1>Billet simple pour l'Alaska</h1>
        <p>Dernières lectures</p>
    </div>
    <?php

    foreach($posts as $post) 
    {
        ?>
        <div class="container post_thumbnail">
        <h2 id="thumbail-title">
                <?= htmlspecialchars($post->getAuthor_post_title()); ?>
                <em>le <?= $post->getDate_post_author(); ?></em>
            </h2>

            <p>
                <?php nl2br(htmlspecialchars($post->getAuthor_post_content())); ?>


                <?php
                    $dataContent = $post->getAuthor_post_content();

                    if (!empty($dataContent)) {
                        if (strlen($dataContent) > 350) 
                        {
                            $shorterContent = substr($dataContent, 0, 500);
                            echo $shorterContent . '...';
                        };
                    } else {
                        echo 'Erreur: pas de texte !';
                    }
                ?>

                <br />
                <a href="<?= HOST; ?>readBook&amp;id=<?= $post->getPostId(); ?>">Lire la suite</a>
            </p>
        </div>
    <?php
    }
    ?>
</div>



