<?php $title_content = 'Jean Forteroche: blog de l\'auteur'; ?>


<?php ob_start(); ?>
<div id="main_container">
    <div id="main-titles">
        <h1 class="main_text_title" id="main_title">Bienvenue sur le site de Jean Forteroche</h1>
        <h2 class="main_text_title" id="sub_title">Auteur de <span id="title_book">'Billet simple pour l'Alaska'</span> et désormais disponible à la lecture !</h2>
        <a id="last_reads_button_link" href="<?php echo HOST; ?>book">Voir les dernières lectures</a>
    </div>
    <?php $body_content = ob_get_clean(); ?>

    <?php require('layouts/template.php'); ?>