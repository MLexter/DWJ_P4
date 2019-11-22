<?php $title_content = 'Connexion à l\'espace d\'administration'; ?>

<div id="main-connexion-screen">
    <div id="connexion_container">
        <div id="connexion_form">
            <h1>Connectez-vous à votre espace:</h1>
            <br />
            <form action="index.php?action=connexionCheck" method="POST">
                <label for="user_id">Identifiant :</label>
                    <input type="text" name="ID_login" class="connexion_inputs" placeholder="Saisissez votre identifiant">
                    <br />
                    <label for="password_user">Mot de passe :</label>
                        <input type="password" name="password" class="connexion_inputs" placeholder="Tapez votre mot de passe">
                    
                        <input type="submit" value="Connexion">
            </form>
        </div>
    </div>
</div>
