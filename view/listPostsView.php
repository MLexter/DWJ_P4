<?php $title_content = 'Jean Forteroche: Liste des chapitres'; ?>

<?php ob_start(); ?>

<div id="main-listPosts">
    <h1>Billet simple pour l'Alaska</h1>
    <p>Dernières lectures</p>

    <?php

    foreach($posts as $post) 
    {
        ?>
        <div class="post_thumbnail">
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

                <a href="<?= HOST; ?>edit-post&amp;id=<?= $post->getPostId(); ?>">Modifier ce chapitre</a>

            </p>
        </div>
    <?php
    }
    // $posts->closeCursor();
    ?>
</div>


<?php $body_content = ob_get_clean(); ?>

<?php require(LAYOUTS.'template.php'); ?>

