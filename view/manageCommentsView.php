<?php $title_content = 'Gérer les commentaires'; ?>



<div id="main-comment-Manager" class="text-center col-12">
    <div class="shadow border p-3 mb-5 bg-white rounded container container-main-title_description col-8">
        <h1>Gérer les commentaires</h1>
    </div>
    <p><a href="<?= HOST; ?>admin/dashboard">Retour à l'écran principal d'administration</a></p>

    <p>Vous pouvez supprimer un commentaire en cliquant sur l'icône en haut à droite de chaque commentaire.</p>

    <hr class="hr-separation">

    <?php if (@$_SESSION['delete_status'] == 1) : ?>

                 <div class="alert alert-success container text-center" role="alert"><i class="fas fa-check"></i><?= $_SESSION['text-alert']; ?>
                 </div>
                 
                 <?php @$_SESSION['delete_status'] = 0; ?>

    <?php endif; ?>
        
    <div id='container_comments'>
        <h2>Commentaires du chapitre</h2>

        <div id="table-comments" class="container">

            <?php if (!empty($comments)) : ?>

                <?php foreach ($comments as $comment) : ?>

                    <table class="table manage-table-display">
                        <tr class="comment-row">
                            <td id="left-section-comment">
                                <h4> <?= $comment->getAuthor_comment() ?> </h4>
                                <p class="date_time_comment"> <?= $comment->getCreation_date_comment() ?> </p>
                            </td>

                            <td id="comment-section">
                                <p> <?= $comment->getContent_comment() ?> </p>
                                <div id="delete-comment-link">
                                    <a href="<?= HOST; ?>admin/delete-comment&amp;id=<?= $comment->getId_comment(); ?>" id="fa-delete-comment" title="Supprimer le commentaire"><i class="far fa-window-close"></i></a>
                                </div>

                            </td>
                        </tr>
                    </table>



                <?php endforeach; ?>

            <?php else : ?>

                <div class="alert alert-info" role="alert">Il n'y a pas de commentaires pour ce chapitre.</div>

            <?php endif; ?>
            </table>
        </div>
    </div>
</div>