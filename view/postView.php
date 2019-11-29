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

 <div id='container_comments'>

     <h2>Commentaires</h2>

     <form action="<?= HOST; ?>post-comment" method="post">
         <div>
             <input type="hidden" name="id_post_comment">

             <label for="author">Auteur</label><br />
             <input type="text" id="author_comment" name="comment_author" required />
         </div>
         <div>
             <label for="comment">Commentaire</label><br />
             <textarea id="content_comment" name="comment_content" required></textarea>
         </div>
         <div>
             <input type="submit" value="Ajouter" name="submit_comment" />
         </div>
     </form>

     <?php foreach($comments as $comment) : ?>

    <div id="comment_box">
        
    </div>
 </div>


     <?php endforeach; ?>