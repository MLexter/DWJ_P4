<?php $title_content = 'Connexion à l\'espace d\'administration'; ?>

<div id="main-connexion-screen" class="container-fluid d-flex align-items-center">
    <div id="connexion_container" class="container col-md-6 shadow border bg-white rounded ">
        <div id="connexion_form">
            <h1 class="text-center">Connectez-vous à votre espace:</h1>
            <br />
            <p id="connexion-text" class="container text-center">Pour vous connecter en tant qu'administrateur du site, veuillez saisir votre 'Identifiant' et votre 'Mot de passe':</p>

            <hr class="hr-separation">

            <form action="<?= HOST; ?>admin/connexion" method="POST">
                <div class="form-group">

                    <table class="table">
                        <tr class="inputs_connexion_responsive">
                            <td><label for="user_id" class="connexion_labels">Identifiant :</label></td>
                            <td><input type="text" name="ID_user" class="form-control connexion_inputs"></td>
                        </tr>
                        <tr class="inputs_connexion_responsive">
                            <td><label for="password_user" class="connexion_labels">Mot de passe:</label></td>
                            <td><input type="password" name="password_user" class="form-control connexion_inputs"></td>
                        </tr>

                    </table>
                    <div id="container-connexion-btn" class="container-fluid d-flex justify-content-end">
                        <input type="submit" id="connexion_btn" class="btn btn-primary" name="submit_connexion" value="Connexion">
                    </div>

            </form>
            <?php if (isset($_SESSION['$error_login']) AND !empty($_SESSION['$error_login'])) : ?>
                <div id="error-container-connexion" class="alert alert-danger text-center" role="alert"><?= $_SESSION['$error_login']; ?></div>
            <?php endif; ?>
        </div>

    </div>
</div>
</div>