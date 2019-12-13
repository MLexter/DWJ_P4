 <?php $title_content = 'Billet simple pour l\'Alaska'; ?>

 
 <div id="main-chapterView" class="container">
     <div class="text-center">
         <h1>Billet simple pour l'Alaska</h1>
         <p><a href="<?= HOST; ?>book">Retour à la liste des dernières lectures</a></p>
     </div>

     <?php if (!empty($_SESSION['isAdmin']) AND $_SESSION['isAdmin']== true) : ?>
                                <div id="comment_management_link" class="d-flex justify-content-center">
                                    <a id="remove_comment_link" class="btn btn-warning text-center" href="<?= HOST; ?>admin/edit-post&amp;id=<?= $post->getPostId(); ?>">Modifier ce chapitre</a>
                                </div>
     <?php endif; ?>

     <div id="chapter_content">
         <div id="illustration-chapter">
             <figure>
                 <img id="image-post-chapter" class="img-fluid" src="<?= HOST; ?>public/images/chapters/<?= $post->getChapter_image(); ?>" name="image_chapter" alt="Illustration du chapitre">
             </figure>
         </div>

         <h2 class="text-center">
             <?= $post->getAuthor_post_title(); ?>
             <br />
             <em class="post_time-text">le <?= $post->getDate_post_author(); ?></em>
         </h2>
    
         <p>
             <?= nl2br($post->getAuthor_post_content()); ?>
         </p>
         
     </div>

     <div id="container_comments">
         <div id="comment_part_title" class="text-center">
             <h3>Espace Commentaires</h3>

             <p>N'hésitez pas à donner votre avis sur ce chapitre en postant un commentaire !</p>
         </div>

         <?php if (!empty($_SESSION['isAdmin']) AND $_SESSION['isAdmin']== true) : ?>
                                <div id="comment_management_link" class="d-flex justify-content-center">
                                    <a id="remove_comment_link" class="btn btn-warning text-center" href="<?= HOST; ?>admin/manage-comments&amp;id=<?= $post->getPostId(); ?>">Gérer les commentaires</a>
                                </div>
         <?php endif; ?>

         <?php if (@$_SESSION['comment_success'] == true) : ?>

            <div class="alert alert-success container text-center" role="alert"><i class="fas fa-check"></i>Votre commentaire a bien été posté !</div>
            <?php @$_SESSION['comment_success'] = false; ?>

        <?php elseif (@$_SESSION['comment_error_message'] !== null) : ?>
            <div class="alert alert-warning text-center" role="alert"><?= @$_SESSION['comment_error_message']; ?> </div>
                
         <?php endif; ?>
         
        <?php if (@$_SESSION['comment_signalment'] == true) : ?>
            <div class="alert alert-primary text-center" role="alert"><?= @$_SESSION['signal_message']; ?></div>
            <?php @$_SESSION['comment_signalment'] = false; ?>

        <?php endif; ?>


         <?php if (isset($comments)) : ?>

             <?php foreach ($comments as $comment) : ?>
                 <div id="comment_box" class="container">

                     <table class="table">
                         <tr class="row comment-row">          
                             <td id="left-section-comment" class="col-md-3">
                                 <h4> <?= $comment->getAuthor_comment() ?> </h4>
                                 <p class="date_time_comment"> <?= $comment->getCreation_date_comment() ?> </p>
                             </td>

                             <td id="comment-section" class="col-lg-9">
                                 <p> <?= $comment->getContent_comment() ?> </p>

                                    <?php if ($comment->getSignaledComment() == 0) : ?>
                                        <a class="btn btn-danger signalment-btn signalment_link text-decoration-none" href="<?= HOST; ?>signal-comment&amp;comment=<?= $comment->getId_comment() ?>&amp;id=<?= $post->getPostId() ?>">
                                            Signaler
                                        </a>
                                    <?php else : ?>
                                        <button class="btn btn-secondary signalment-btn signalment_link disabled" tabindex="-1" role="button" aria-disabled="true">Déjà signalé
                                    </button>
                                    <?php endif; ?>
                                        
                             </td>
                         </tr>
                     </table>

                 </div>
             <?php endforeach; ?>
         <?php else : ?>

             <div class="alert alert-dark container text-center" role="alert">Aucun commentaire pour ce chapitre. Soyez le premier à laisser votre avis !</div>
         <?php endif; ?>
     </div>


     <div id="comment-form_container" class="container border">
         <h3>Laisser un commentaire</h3>

         <form action="<?= HOST; ?>post-comment&amp;id=<?= $post->getPostId(); ?>" method="post">
             <div class="form-group">
                 <label for="author">
                     <h5>Auteur</h5>
                 </label><br />
                 <input type="text" id="author_comment" class="form-control" name="comment_author" placeholder="Votre Pseudo" required/>
             </div>

             <div class="form-group">
                 <label for="comment">
                     <h5>Commentaire</h5>
                 </label><br />
                 <textarea id="content_comment" class="form-control" name="comment_content" placeholder="Votre commentaire..." required></textarea>
             </div>
             <input type="submit" value="Ajouter" name="submit_comment" class="btn btn-primary" />
         </form>

         
     </div>
 </div>

 <!-- <div class="alert alert-success" role="alert" name="">Votre commentaire a bien été posté !</div> -->