<?php $title_content = 'Gérer les commentaires'; ?>


<h1>Gérer les commentaires</h1>
<p><a href="<?= HOST; ?>admin">Retour à l'écran principal d'administration</a></p>

<div id="main-comment-Manager">
    <div id='container_comments'>
        <h2>Commentaires</h2>

        <?php
        if (isset($comments)) {
            foreach ($comments as $comment) { ?>

                <div id="comment_box">
                    <p> <?= $comment->getAuthor_comment() ?> </p>
                    <p> <?= $comment->getCreation_date_comment() ?> </p>
                    <p> <?= $comment->getContent_comment() ?> </p>
                </div>

        <?php
            }
        } ?>
        
    </div>
</div>