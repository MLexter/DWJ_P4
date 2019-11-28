 

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
 
<h2>Commentaires</h2>
 
<form action="#" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" value="Ajouter" />
    </div>
</form> 
 
<?php /* while ($comment = $comments->fetch()) : */ ?>


 

<?php /* endwhile; */ ?> 




