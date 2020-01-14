<?php $title_content = 'Désolé, Cette page n\'existe pas !'; ?>

<!DOCTYPE html>

<html lang="fr" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Aclonica|Chau+Philomene+One|Fira+Sans&display=swap" rel="stylesheet">

    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#authorPostContent'
        });
    </script>

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/1d4b0efeb6.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="http://jean-forteroche.webagency-projet.fr/public/css/style.css" />

    <meta name="description" content="Bienvenue sur le blog de Jean Forteroche, l'auteur de 'Billet simple pour l'Alaska et désormais disponible en ligne ! Accédez à la lecture du roman du célèbre auteur en parcourant les chapitres de sa nouvelle histoire inspirée de ses voyages.">
    <meta name="keywords" content="forteroche, billet simple, Alaska, auteur, livre">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://jean-forteroche.webagency-projet.fr" />
    <meta property="og:title" content="Jean Forteroche - Le Blog de l'Auteur" />

    <meta property="og:image" content="public/images/author_portait.jpg" />
    <meta property="og:site_name" content="Jean Forteroche - Le Blog de l'auteur" />
    <meta name="twitter:card" content="summary" />
    <link rel="shortcut icon" type="image/png" href="http://jean-forteroche.webagency-projet.fr/public/images/favicon/03242019-09.jpg">

    <title><?= $title_content ?></title>

</head>

<body>
    <a href="#top-anchor" id="scrolltop-anchor"></a>

    <header>

<nav class="navbar navbar-expand-lg navbar-light">
    <a id="container-brand_logo" class="navbar-brand" href="<?= HOST ?>">
  
      <h1 id="logo_site_name">JEAN FORTEROCHE</h1>
      <h2 id="sub_logo_title">Le blog de l'auteur</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://jean-forteroche.webagency-projet.fr/">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://jean-forteroche.webagency-projet.fr/book">Livre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://jean-forteroche.webagency-projet.fr/about">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://jean-forteroche.webagency-projet.fr/contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  
</header>

    <a class="scrollup-btn btn-floating btn-large cyan pulse" title="Retour en haut de la page"><i class="material-icons">change_history</i></a>

    <div id="main-position" class="container-fluid">

        <?php
        header("HTTP/1.0 404 Not Found");
        ?>
        <div id="container-404" class="container-fluid">
            <div class="shadow border p-3 mb-5 rounded container container-main-title_description col-12 text-center">

                <h1>Désolé, cette page n'existe pas !</h1>
                <a id="link-404" href="http://jean-forteroche.webagency-projet.fr/">RETOUR A LA PAGE D'ACCUEIL</a>

            </div>
        </div>

    </div>

    <div id="footer-container">
    <div id="footer_infos">

        <?php if (isset($_SESSION['isAdmin'])) : ?>
            <?php if ($_SESSION['isAdmin'] = true) : ?>

                <a class="footer-item text-center col" id="footer_deconnexion_link" href="http://jean-forteroche.webagency-projet.fr/admin/deconnexion">Déconnexion</a>
                <a class="footer-item text-center col" id="ADMIN" href="http://jean-forteroche.webagency-projet.fr/admin/dashboard">Espace Admin</a>

            <?php else : ?>

                <a class="footer-item text-center col" id="footer_connexion_link" href="http://jean-forteroche.webagency-projet.fr/connexion"><span class="fa_locker"><i class="fas fa-lock"></i></span> Connexion</a>

            <?php endif; ?>

        <?php else : ?>

            <a class="footer-item text-center col" id="footer_connexion_link" href="http://jean-forteroche.webagency-projet.fr/connexion"> Connexion</a>

        <?php endif; ?>

        <a class="footer-item text-center col" id="footer_mentions_legales" href="http://jean-forteroche.webagency-projet.fr/mentions-legales">Mentions Légales</a>

        <div class="footer-item text-center col" id="footer_social">
            <span class="social">
                <a class="social-link" href="http://www.facebook.com" title="Suivez-moi sur Facebook" target="_blank">
                    <img class="social-img" src="../public/images/social/facebook.png" alt="Facebook">
                </a>
            </span>
            <span class="social">
                <a class="social-link" href="http://www.instagram.com" title="Suivez-moi sur Instagram" target="_blank">
                    <img class="social-img" src="../public/images/social/instagram.png" alt="Instagram">
                </a>
            </span>
            <span class="social">
                <a class="social-link" href="http://www.twitter.com" title="Suivez-moi sur Twitter" target="_blank">
                    <img class="social-img" src="../public/images/social/twitter.png" alt="Twitter">
                </a>
            </span>
            <span class="social">
                <a class="social-link" href="http://www.pinterest.com" title="Suivez-moi sur Pinterest" target="_blank">
                    <img class="social-img" src="../public/images/social/pinterest.png" alt="Pinterest">
                </a>
            </span>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?= ASSETJS . 'custom.js' ?>"></script>

</body>

</html>