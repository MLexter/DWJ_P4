 <?php $title_content = 'Billet simple pour l\'Alaska'; ?>

 <div class="text-center">
     <h1>Billet simple pour l'Alaska</h1>
     <p><a href="<?= HOST; ?>book">Retour à la liste des dernières lectures</a></p>
 </div>

 <div id="main-postView">
     <h2>
         <?= $post->getAuthor_post_title(); ?>
         <br />
         <em class="post_time-text">le <?= $post->getDate_post_author(); ?></em>
     </h2>

     <p>
         <?= nl2br($post->getAuthor_post_content()); ?>
     </p>
 </div>

 <div id="container_comments" class="container">
     <div class="text-center">
         <h3>Espace Commentaires</h3>

         <p>N'hésitez pas à donner votre avis sur ce chapitre en postant un commentaire !</p>
     </div>

     <?php if (isset($comments)) : ?>
        
          <?php  foreach ($comments as $comment) : ?>
             <div id="comment_box" class="container border-bottom">
                 <h4> <?= $comment->getAuthor_comment() ?> </h4>
                 <p class="date_time_comment"> <?= $comment->getCreation_date_comment() ?> </p>
                 <p> <?= $comment->getContent_comment() ?> </p>
                 <a class="btn btn-danger" href="#">Signaler ce commentaire</a>
             </div>
          <?php endforeach; ?>
     <?php else : ?> 
    
         <div class="alert alert-dark" role="alert">'Pas de commentaire pour ce chapitre. Soyez le premier à laisser votre avis !'</div>
          <?php endif; ?>
 </div>


 <div id="comment-form_container" class="container border">
     <h3>Laisser un commentaire</h3>

     <form action="<?= HOST; ?>post-comment&amp;id=<?= $post->getPostId(); ?>" method="post">
         <div class="form-group">
             <label for="author">
                 <h5>Auteur</h5>
             </label><br />
             <input type="text" id="author_comment" class="form-control" name="comment_author" placeholder="Votre Pseudo" required />
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
 <!-- <div class="alert alert-success" role="alert" name="">Votre commentaire a bien été posté !</div> -->