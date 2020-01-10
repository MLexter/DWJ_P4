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
    <link rel="stylesheet" href="<?php echo ASSETCSS; ?>style.css" />

    <meta name="description"
        content="Bienvenue sur le blog de Jean Forteroche, l'auteur de 'Billet simple pour l'Alaska et désormais disponible en ligne ! Accédez à la lecture du roman du célèbre auteur en parcourant les chapitres de sa nouvelle histoire inspirée de ses voyages.">
    <meta name="keywords" content="forteroche, billet simple, Alaska, auteur, livre">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://jean-forteroche.webagency-projet.fr" />
    <meta property="og:title" content="Jean Forteroche - Le Blog de l'Auteur" />
    
    <meta property="og:image" content="public/images/author_portait.jpg" />
    <meta property="og:site_name" content="Jean Forteroche - Le Blog de l'auteur" />
    <meta name="twitter:card" content="summary" />
    <link rel="shortcut icon" type="image/png" href="<?= HOST; ?>public/images/favicon/03242019-09.jpg">

    <title><?= $title_content ?></title>
    
</head>

<body>
    <a href="#top-anchor" id="scrolltop-anchor"></a>

    <?php include('header.php'); ?>

    <a class="scrollup-btn btn-floating btn-large cyan pulse" title="Retour en haut de la page"><i class="material-icons">change_history</i></a>

    <div id="main-position" class="container-fluid">

        <?= $body_content ?>

    </div>

    <?php include('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?= ASSETJS . 'custom.js' ?>"></script>

</body>

</html>