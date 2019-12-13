<?php $title_content = 'Gestion des commentaires signalés'; ?>



<div id="main-comment-Manager" class="text-center">
    <h1>Gestion des commentaires signalés:</h1>
    <p><a href="<?= HOST; ?>admin/dashboard">Retour à l'écran principal d'administration</a></p>
    <div id='container_comments'>
        <h2>Liste des signalements</h2>

        <p>Retrouvez dans la liste ci-dessous tous les commentaires qui ont été signalés par les utilisateurs.</p>
        <p>Utilisez les options à votre disposition pour les gérer.</p>

        <div class="container">

            
            <a href="<?= HOST; ?>admin/delete-all-signalments">Effacer tous les commentaires de la liste</a>
            
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Auteur du commentaire</th>
                        <th scope="col">Date/Heure</th>
                        <th scope="col">Commentaire</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <?php if (!empty($signalmentList)) : ?>
                    <?php foreach ($signalmentList as $signalment) : ?>

                <tbody>
                            <tr>
                                <th scope="row"><?= $signalment->getId_comment(); ?></th>
                                <td><?= $signalment->getAuthor_comment(); ?></td>
                                <td><?= $signalment->getCreation_date_comment(); ?></td>
                                <td><?= $signalment->getContent_comment(); ?></td>
                                <td><a href="<?= HOST . 'readBook&amp;id=' . $signalment->getID_chapter(); ?>">Voir le chapitre</a>                                </td>
                                <td><a href="<?= HOST; ?>admin/delete-signaled-comment&amp;id=<?= $signalment->getId_comment(); ?>">Supprimer</a></td>
                                <td><a href="<?= HOST; ?>admin/cancel-signalment&amp;id=<?= $signalment->getId_comment(); ?>">Retirer le signalement</a></td>
                            </tr>
                        </tbody>

                <?php endforeach; ?>

            <?php else : ?>

                <div class="alert alert-info" role="alert">Il n'y a pas de commentaires signalés.</div>

            <?php endif; ?>

            </table>
        </div>
    </div>
</div>