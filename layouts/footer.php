<div id="footer-container">
    <div id="footer_infos" class="d-flex justify-content-around align-items-center">
        <p class="footer-item" id="footer_copyright">Jean Forteroche &copy</p>

        <?php if (isset($_SESSION['isAdmin'])) : ?>
            <?php if ($_SESSION['isAdmin'] = true) : ?>
                <a class="footer-item" id="footer_deconnexion_link" href="<?= HOST; ?>admin/deconnexion"><span id="fa-logout"><i class="fas fa-power-off"></i></span>Déconnexion</a>
                <a class="footer-item" id="ADMIN" href="<?= HOST; ?>admin/dashboard">Espace Admin</a>
            <?php else : ?>
                <a class="footer-item" id="footer_connexion_link" href="<?= HOST; ?>connexion"><span class="fa_locker"><i class="fas fa-lock"></i></span> Connexion</a>
            <?php endif; ?>

        <?php else : ?>

            <a class="footer-item" id="footer_connexion_link" href="<?= HOST; ?>connexion"><span class="fa_locker"><i class="fas fa-lock"></i></span> Connexion</a>

        <?php endif; ?>

        <p class="footer-item" id="footer_mentions_legales">Mentions Légales</p>
    </div>

</div>