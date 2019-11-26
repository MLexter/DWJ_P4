<?php $title_content = 'Administration du blog' ?>

<div id="main-admin-page">
    <div id="admin_container">
        <h1>Bienvenue XXX !</h1>
        <br />
        <p>Pour administrer vos pages, accédez aux options en face de vos chapitres.</p>
    </div>

    <div id="new_chapter">
        <a href="<?= HOST; ?>addPost">
            <h2>Ajouter un nouveau chapitre</h2>
        </a>
    </div>

    <div id="container-listposts-admin">
        <?php

        foreach ($posts as $post) {
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
                            if (strlen($dataContent) > 350) {
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
        ?>
    </div>
</div>
</div>