 <?php $title_content = 'Billet simple pour l\'Alaska'; ?>


 <h1>Billet simple pour l'Alaska</h1>
 <p><a href="<?= HOST; ?>">Retour à la liste des dernières lectures</a></p>

 <div id="main-postView">
     <h3>
         <?= htmlspecialchars($post->getAuthor_post_title()); ?>


         <em>le <?= $post->getDate_post_author(); ?></em>
     </h3>

     <p>
         <?= nl2br(htmlspecialchars($post->getAuthor_post_content())); ?>
     </p>
 </div>

 <div id="container_comments" class="container">

     <h2>Espace Commentaires</h2>

     <p>N'hésitez pas à donner votre avis sur ce chapitre en postant un commentaire !</p>


     <?php
        if (isset($comments)) {
            foreach ($comments as $comment) { ?>

             <div id="comment_box">
                 <h4> <?= $comment->getAuthor_comment() ?> </h4>
                 <p> <?= $comment->getCreation_date_comment() ?> </p>
                 <p> <?= $comment->getContent_comment() ?> </p>
                 <a class="btn btn-danger" href="#">Signaler ce commentaire</a>
             </div>
     <?php
            }
        } ?>
     <div id="comment-form_container" class="border">
         <h3>Laisser un commentaire</h3>

         <form action="<?= HOST; ?>post-comment&amp;id=<?= $post->getPostId(); ?>" method="post">
             <div class="form-group">
                 <label for="author">Auteur</label><br />
                 <input type="text" id="author_comment" class="form-control" name="comment_author" placeholder="Votre Pseudo" required />
             </div>

             <div class="form-group">
                 <label for="comment">Commentaire</label><br />
                 <textarea id="content_comment" class="form-control" name="comment_content" placeholder="Votre commentaire..." required></textarea>
             </div>
             <input type="submit" value="Ajouter" name="submit_comment" class="btn btn-primary" />
         </form>
     </div>
     <!-- <div class="alert alert-success" role="alert" name="">Votre commentaire a bien été posté !</div> -->

 </div>