 
<?php ob_start(); ?>

<?php $title_content = 'Billet simple pour l\'Alaska'; ?>


<h1>Billet simple pour l'Alaska</h1>
<p><a href="<?= HOST; ?>">Retour à la liste des dernières lectures</a></p>
 
<div id="main-postView">
    <h3>
        <?= htmlspecialchars($post['author_post_title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h3>
     
    <p>
        <?= nl2br(htmlspecialchars($post['author_post_content'])) ?>
    </p>
</div>
 
<h2>Commentaires</h2>
 
<form action="index.php?action=addComment&amp;id=<?= $post['ID_post'] ?>" method="post">
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
 
<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?> </p>
<?php
}
?>

<!-- TODO: Si vérifications sont ok en tant qu'admin -> afficher le link 'Modifier ce chapitre'  -->

<a href="index.php?action=editView&amp;id=<?= $post['ID_post'] ?>">Modifier ce chapitre</a>

<?php $body_content = ob_get_clean(); ?>
 
<?php require('layouts/template.php'); ?>