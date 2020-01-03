<?php $title_content = 'Gérer les commentaires'; ?>



<div id="main-comment-Manager" class="text-center">
    <h1>Gérer les commentaires</h1>
    <p><a href="<?= HOST; ?>admin/dashboard">Retour à l'écran principal d'administration</a></p>

    <hr class="hr-separation">

    <div id='container_comments'>
        <h2>Commentaires du chapitre</h2>

        <div id="table-comments" class="container">

            <?php if (!empty($comments)) : ?>
                
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Auteur</th>
                        <th scope="col">Commentaire</th>
                        <th scope="col">Signalement</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                
                  <?php foreach ($comments as $comment) : ?>
                        <tbody>
                            <tr>
                                <td><?= $comment->getAuthor_comment(); ?></td>
                                <td><?= $comment->getContent_comment(); ?></td>
                                <td><?php if ($comment->getSignaledComment() > 0) { echo '<i class="fas fa-flag" alt="Commentaire signalé"></i>'; } else { echo ''; } ?></td>
                                <td><a href="<?= HOST; ?>admin/delete-comment&amp;id=<?= $comment->getId_comment(); ?>">Supprimer</a></td>
                            </tr>
                        </tbody>
                  <?php endforeach; ?>

                <?php else : ?>

                    <div class="alert alert-info" role="alert">Il n'y a pas de commentaires pour ce chapitre.</div>

                <?php endif; ?>
            </table>
        </div>
    </div>
</div>