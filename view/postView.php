 <?php $title_content = 'Billet simple pour l\'Alaska'; ?>

 <div id="main-listPosts" class="container rounded">
     <div id="main-chapterView" class="container">
         <div id ="chapter-title-page" class="container text-center">
             <h1>"<?= $post->getAuthor_post_title(); ?>"</h1>
         </div>

         <hr class="hr-separation">

         <p id="backto_link" class="text-center"><a href="<?= HOST; ?>book">Retour à la liste des dernières lectures</a></p>

         <?php if (!empty($_SESSION['isAdmin']) and $_SESSION['isAdmin'] == true) : ?>
             <div class="management_link d-flex justify-content-center">
                 <a id="remove_comment_link" class="btn btn-info text-center" href="<?= HOST; ?>admin/edit-post&amp;id=<?= $post->getPostId(); ?>">Modifier ce chapitre</a>
             </div>
         <?php endif; ?>


         <div id="chapter_content">
             <div id="illustration-chapter">
                 <figure id="illustration-in-chapter">
                     <img id="image-post-chapter" class="img-fluid shadow p-1 mb-5 bg-white rounded" src="<?= HOST; ?>public/images/chapters/<?= $post->getChapter_image(); ?>" name="image_chapter" alt="Illustration du chapitre">
                 </figure>
             </div>

             <div id="text_chapter">
                 <h2 class="text-center">
                     <?= $post->getAuthor_post_title(); ?>
                     <br />
                     <em class="post_time-text">le <?= $post->getDate_post_author(); ?></em>
                 </h2>

                 <p> <?= nl2br($post->getAuthor_post_content()); ?> </p>
             </div>

         </div>

         <div class="text-center separation_icon">
             <i class="material-icons">fiber_manual_record</i>
         </div>

         <div id="container_comments">
             <div id="comment_part_title" class="text-center">
                 <h2>Espace Commentaires</h2>

                 <p>N'hésitez pas à donner votre avis sur ce chapitre en postant un commentaire !</p>
             </div>

             <hr class="hr-separation">

             <?php if (!empty($_SESSION['isAdmin']) and $_SESSION['isAdmin'] == true) : ?>
                 <div class="management_link d-flex justify-content-center">
                     <a id="remove_comment_link" class="btn btn-info text-center" href="<?= HOST; ?>admin/manage-comments&amp;id=<?= $post->getPostId(); ?>">Gérer les commentaires</a>
                 </div>
             <?php endif; ?>

             <?php if (@$_SESSION['comment_success'] == true) : ?>

                 <div class="alert alert-success container text-center" role="alert"><i class="fas fa-check"></i> <span class="text-alert">Votre commentaire a bien été posté !</span></div>
                 <?php @$_SESSION['comment_success'] = false; ?>

             <?php elseif (@$_SESSION['comment_error_message'] !== null) : ?>
                 <div class="alert alert-info text-center" role="alert"><?= @$_SESSION['comment_error_message']; ?> </div>

             <?php endif; ?>

             <?php if (@$_SESSION['comment_signalment'] == true) : ?>
                 <div class="alert alert-primary text-center" role="alert"><i class="fas fa-info"></i> <span class="text-alert">Le commentaire a bien été signalé et sera traité par l'administrateur du site.</span></div>
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
                                         <button class="btn btn-secondary signalment-btn signalment_link disabled" tabindex="-1" role="button" aria-disabled="true">Déjà signalé</button>
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

         <div id="comment-form_container" class="container-fluid col-12">
             <h3 class="text-center">Laisser un commentaire</h3>

             <form action="<?= HOST; ?>post-comment&amp;id=<?= $post->getPostId(); ?>" method="post">
                 <div class="form-group">
                     <label for="author">
                         <h4>Auteur</h4>
                     </label><br />
                     <input type="text" id="author_comment" class="form-control" name="comment_author" placeholder="Votre Pseudo" required />
                 </div>
                 <div class="form-group">
                     <label for="comment">
                         <h4>Commentaire</h4>
                     </label><br />
                     <textarea id="content_comment" class="form-control materialize-textarea" name="comment_content" placeholder="Votre commentaire..." required></textarea>
                 </div>
                 <input type="submit" value="Ajouter" name="submit_comment" class="btn btn-primary" />
             </form>


         </div>
     </div>
 </div>