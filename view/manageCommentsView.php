<?php $title_content = 'Gérer les commentaires'; ?>



<div id="main-comment-Manager" class="text-center">
    <h1>Gérer les commentaires</h1>
    <p><a href="<?= HOST; ?>admin/dashboard">Retour à l'écran principal d'administration</a></p>

    <hr class="hr-separation">

    <div id='container_comments'>
        <h2>Commentaires du chapitre</h2>

        <div id="table-comments" class="container">

            <?php if (!empty($comments)) : ?>               
            
                  <?php foreach ($comments as $comment) : ?>

                    <table class="table">
                             <tr class="comment-row">
                                 <td id="left-section-comment" class="col-md-3">
                                     <h4> <?= $comment->getAuthor_comment() ?> </h4>
                                     <p class="date_time_comment"> <?= $comment->getCreation_date_comment() ?> </p>
                                 </td>

                                 <td id="comment-section" class="col-lg-9">
                                     <p> <?= $comment->getContent_comment() ?> </p>

                                     <a href="<?= HOST; ?>admin/delete-comment&amp;id=<?= $comment->getId_comment(); ?>">Supprimer</a>

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