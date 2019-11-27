<?php $title_content = 'Administration du blog' ?>

<div id="main-admin-page">
    <div id="admin_container">
        <h1>Bienvenue XXX !</h1>
        <br />
        <p>Pour administrer vos pages, accédez aux options en face de vos chapitres.</p>
    </div>

    <div id="new_chapter">
        <a href="<?= HOST; ?>admin/create">
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
                </h2>
                <a href="<?= HOST; ?>admin/edit-post&amp;id=<?= $post->getPostId(); ?>">Modifier</a>


                
            </div>
        <?php
        }
        ?>
    </div>
</div>
</div>