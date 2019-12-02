<?php $title_content = 'Administration du blog' ?>

<div id="main-admin-page">
    <div id="admin_container" class="container col-8">
        <h1>Bienvenue XXX !</h1>
        <br />
        <p>Pour administrer vos pages, accédez aux options en face de vos chapitres.</p>
        <p>Voici la liste de vos derniers chapitres publiés.</p>
    </div>

    <div id="new_chapter">
        <a href="<?= HOST; ?>admin/create">
            <h2>Ajouter un nouveau chapitre</h2>
        </a>
    </div>

    <div id="container-listposts-admin" class="container">
        <?php

        foreach ($posts as $post) {
            ?>
                <div class="col">
                    <div class="post_thumbnail">
                        <h2 id="thumbail-title">
                            <?= htmlspecialchars($post->getAuthor_post_title()); ?>
                        </h2>
                        <a href="<?= HOST; ?>admin/edit-post&amp;id=<?= $post->getPostId(); ?>">Modifier</a> |
                        <a href="<?= HOST; ?>admin/delete-post&amp;id=<?= $post->getPostId(); ?>">Supprimer</a> | 
                        <a href="<?= HOST; ?>admin/manage-comments&amp;id=<?= $post->getPostId(); ?>">Gérer les commentaires</a>


                    </div>
                </div>
        <?php
        }
        ?>
    </div>
</div>
</div>