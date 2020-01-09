<?php $title_content = 'Gérer les commentaires signalés'; ?>



<div id="main-comment-Manager" class="text-center col-12">
    <div class="shadow border p-3 mb-5 rounded container container-main-title_description col-12">
        <h1>Gérer les commentaires signalés</h1>
    </div>
    <p><a href="<?= HOST; ?>admin/dashboard">Retour à l'écran principal d'administration</a></p>
    <div id='container_comments'>

        <p>Retrouvez dans la liste ci-dessous tous les commentaires qui ont été signalés par les visiteurs.</p>

        <hr class="hr-separation">

        
        <?php if (@$_SESSION['delete_status'] == 1) : ?>
            
            <div class="alert alert-success container text-center" role="alert">
                <i class="fas fa-check"></i><?= $_SESSION['text-alert']; ?>
            </div>
            
            <?php @$_SESSION['delete_status'] = 0; ?>
            
            <?php endif; ?>

        <?php if (@$_SESSION['unsignal-success'] == true) : ?>
            <div class="alert alert-primary text-center" role="alert">
                <i class="fas fa-check"></i><?= $_SESSION['unsignal-message']; ?>
            </div>
            <?php @$_SESSION['unsignal-success'] = false; ?>
        <?php endif; ?>
            
            <div id="container-signalments" class="container">
                <h2>Commentaires signalés</h2>
                <br />
                
            <a href="<?= HOST; ?>admin/delete-all-signalments">Effacer tous les commentaires de la liste</a>

            <div id="table-comments" class="container">


                <?php if (!empty($signalmentList)) : ?>

                    <?php foreach ($signalmentList as $signalment) : ?>

                        <table class="table manage-table-display">
                            <tr class="comment-row">
                                <td id="left-section-comment">
                                    <h4> <?= $signalment->getAuthor_comment() ?> </h4>
                                    <p class="date_time_comment"> <?= $signalment->getCreation_date_comment() ?> </p>
                                </td>

                                <td id="comment-section">
                                    <p> <?= $signalment->getContent_comment() ?> </p>
                                    <div id="delete-comment-link">
                                        <a href="<?= HOST; ?>admin/delete-signaled-comment&amp;id=<?= $signalment->getId_comment(); ?>" id="fa-delete-comment" title="Supprimer le commentaire"><i class="far fa-window-close"></i></a>
                                        <a href="<?= HOST; ?>admin/remove-signalment&amp;id=<?= $signalment->getId_comment(); ?>" id="signalment-remove" title="Ne plus signaler"><i class="far fa-comment"></i></a>
                                    </div>

                                </td>
                            </tr>
                        </table>

                    <?php endforeach; ?>

                <?php else : ?>

                    <div class="alert alert-info" role="alert">Il n'y a pas de commentaires signalés.</div>

                <?php endif; ?>

                </table>
            </div>
        </div>
    </div>