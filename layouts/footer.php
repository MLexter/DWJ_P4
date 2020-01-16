<div id="footer-container">
    <div id="footer_infos">

        <?php if (isset($_SESSION['isAdmin'])) : ?>
            <?php if ($_SESSION['isAdmin'] = true) : ?>

                <a class="footer-item text-center col" id="footer_deconnexion_link" href="<?= HOST; ?>admin/deconnexion">Déconnexion</a>
                <a class="footer-item text-center col" id="ADMIN" href="<?= HOST; ?>admin/dashboard">Espace Admin</a>

            <?php else : ?>

                <a class="footer-item text-center col" id="footer_connexion_link" href="<?= HOST; ?>connexion"><span class="fa_locker"><i class="fas fa-lock"></i></span> Connexion</a>

            <?php endif; ?>

        <?php else : ?>

            <a class="footer-item text-center col" id="footer_connexion_link" href="<?= HOST; ?>connexion"> Connexion</a>

        <?php endif; ?>

        <a class="footer-item text-center col" id="footer_mentions_legales" href="<?= HOST; ?>mentions-legales">Mentions Légales</a>

        <div class="footer-item text-center col" id="footer_social">
            <span class="social">
                <a class="social-link" href="http://www.facebook.com" title="Suivez-moi sur Facebook" target="_blank">
                    <img class="social-img" src="<?= HOST; ?>public/images/social/facebook.png" alt="Facebook">
                </a>
            </span>
            <span class="social">
                <a class="social-link" href="http://www.instagram.com" title="Suivez-moi sur Instagram" target="_blank">
                    <img class="social-img" src="<?= HOST; ?>public/images/social/instagram.png" alt="Instagram">
                </a>
            </span>
            <span class="social">
                <a class="social-link" href="http://www.twitter.com" title="Suivez-moi sur Twitter" target="_blank">
                    <img class="social-img" src="<?= HOST; ?>public/images/social/twitter.png" alt="Twitter">
                </a>
            </span>
            <span class="social">
                <a class="social-link" href="http://www.pinterest.com" title="Suivez-moi sur Pinterest" target="_blank">
                    <img class="social-img" src="<?= HOST; ?>public/images/social/pinterest.png" alt="Pinterest">
                </a>
            </span>
        </div>
    </div>
</div>