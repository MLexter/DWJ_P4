<?php $title_content = 'Connexion à l\'espace d\'administration'; ?>

<div id="main-connexion-screen">
    <div id="connexion_container">
        <div id="connexion_form">
            <h1>Connectez-vous à votre espace:</h1>
            <br />
            <form action="<?= HOST; ?>admin/connexion" method="POST">
                <label for="user_id">Identifiant :</label>
                <input type="text" name="ID_user" class="connexion_inputs" placeholder="Saisissez votre identifiant">
                <br />
                <label for="password_user">Mot de passe :</label>
                <input type="password" name="password_user" class="connexion_inputs" placeholder="Tapez votre mot de passe">

                <input type="submit" name="submit_connexion" value="Connexion">

            </form>
            <?php if (isset($error_login)) : ?>
            <div class="alert alert-dark" role="alert"><?= $error_login; ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>