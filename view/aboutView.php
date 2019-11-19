<?php $title_content = 'A propos de l\'auteur'; ?>

<?php ob_start(); ?>

<div id="main-about">
    <div id="about_container">
        <figure id="portrait_container">
            <img id="author_portrait" src="public/images/author_portait.jpg" alt="Portrait de Jean Forteroche">
        </figure>
        <div id="about_text_content">
            <h1>A propos de l'auteur:</h1>
            <br />
            <p class="about_text">Jean Forteroche est un écrivain Suisse né le 12 juillet 1971, passionné d'arts en tous genres et globbe trotteur. C'est vers la lecture qu'il se tournera très tôt: les classiques Baudelaire, Rimbault, Rousseau ou encore Ferdinand-Céline sont ses premiers coups de coeur avant de se tourner vers des auteurs plus contemporains comme Henry Miller. Une fascination va alors naître pour l'écriture. </p><br />

            <p class="about_text">Ses premières idées d'auteur lui viennent très tôt et il décide de les consigner dans un espace très personnel: ses carnets. Il ne les quitte jamais et prend soin de noter la moindre idée. Il voyage beaucoup à travers le monde et puise son inspiration de ses nombreuses découvertes culturelles. Après plusieurs essais personnels, Jean Forteroche publie sa première oeuvre 'Billet simple pour l'Alaska' en 2019. </p><br />
            
            <p class="about_text">Il se confie: <span id="quote_text_author">"Ce roman est l'aboutissement créatif de plusieurs années de notes que j'ai prise dans mon carnet. La découverte de l'Alaska a été comme un déclic pour moi et je me suis dit que l'idée que je cherchais était là. Le voyage est une porte ouverte vers la création et l'inspiration peut se trouver à chaque coin de rue ! C'est pour cela que mes carnets ne me quittent jamais !" </span></p><br />
        
            <p class="about_text">Auteur au style décalé mais passionné, Jean Forteroche transpire l'humanisme et le réalisme et tient à faire partager au lecteur toute la force de l'évasion par la lecture. </p><br />
        
            <p class="about_text">Sans cesse actif, il travaille déjà sur sa deuxième oeuvre...</p>
        </div>
    </div>
</div>

<?php $body_content = ob_get_clean(); ?>

<?php require('layouts/template.php'); ?>