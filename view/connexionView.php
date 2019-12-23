<?php $title_content = 'Connexion à l\'espace d\'administration'; ?>

<div id="main-connexion-screen" class="container-fluid d-flex align-items-center">
    <div id="connexion_container" class="container d-flex align-items-center shadow border bg-white rounded col-6">
        <div id="connexion_form">
            <h1 class="text-center">Connectez-vous à votre espace:</h1>
            <br />
            <p class="container text-center">Pour vous connecter en tant qu'administrateur du site, veuillez saisir votre identifiant et votre mot de passe:</p>
            <form action="<?= HOST; ?>admin/connexion" method="POST">
                <div class="form-group">

                    <table class="table">
                        <tr>
                            <td><label for="user_id" class="connexion_labels">IDENTIFIANT :</label></td>
                            <td><input type="text" name="ID_user" class="form-control connexion_inputs" placeholder="Saisissez votre identifiant"></td>
                        </tr>
                        <tr>
                            <td><label for="password_user" class="connexion_labels">MOT DE PASSE :</label></td>
                            <td><input type="password" name="password_user" class="form-control connexion_inputs" placeholder="Tapez votre mot de passe"></td>
                        </tr>

                    </table>
                    <div class="container-fluid d-flex justify-content-end">
                        <input type="submit" class="btn btn-primary" name="submit_connexion" value="Connexion">
                    </div>

            </form>
        </div>

        <?php if (isset($_SESSION['$error_login'])) : ?>
            <div class="alert alert-danger text-center" role="alert"><?= $_SESSION['$error_login']; ?></div>
        <?php endif; ?>
    </div>
</div>
</div>