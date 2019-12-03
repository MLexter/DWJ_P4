<?php $title_content = 'Gérer les commentaires'; ?>


<h1>Gérer les commentaires</h1>
<p><a href="<?= HOST; ?>admin">Retour à l'écran principal d'administration</a></p>

<div id="main-comment-Manager">
    <div id='container_comments'>
        <h2>Commentaires</h2>

        <div class="container">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Auteur du commentaire</th>
                        <th scope="col">Commentaire</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <?php
                if (isset($comments)) {
                    foreach ($comments as $comment) { ?>
                        <tbody>
                            <tr>
                                <th scope="row">ID auteur</th>
                                <td><?= $comment->getAuthor_comment() ?></td>
                                <td><?= $comment->getContent_comment() ?></td>
                                <td><a href="<?= HOST; ?>admin/delete-comment">Supprimer</a></td>
                            </tr>
                        </tbody>
                <?php
                    }
                } ?>
            </table>
        </div>
    </div>
</div>