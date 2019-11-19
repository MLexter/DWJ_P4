<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Aclonica|Chau+Philomene+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title_content ?></title>
</head>

<body>
        <?php include('header.php'); ?>

    <div id="main-position">

        <?= $body_content ?>

    </div>

        <?php include('footer.php'); ?>


</body>

</html>