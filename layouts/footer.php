<div id="footer-container">
    <div id="footer_infos">
        <p class="footer-item" id="footer_copyright">Jean Forteroche &copy</p>
        <p class="footer-item" id="footer_mentions_legales">Mentions Légales</p>
        
        <?php if (isset($_SESSION['isAdmin'])) : ?>
            <?php if ($_SESSION['isAdmin'] = true) : ?>
                <a class="footer-item" id="footer_deconnexion_link" href="<?= HOST; ?>admin/deconnexion">Déconnexion</a>
                    <a class="footer-item" id="ADMIN" href="<?= HOST; ?>admin/dashboard">ADMINISTRATION</a>
            <?php else : ?>
                <a class="footer-item" id="footer_connexion_link" href="<?= HOST; ?>connexion">Se connecter</a>                    
            <?php endif; ?>

        <?php else : ?>
            
            <a class="footer-item" id="footer_connexion_link" href="<?= HOST; ?>connexion">Se connecter</a>

        <?php endif; ?>

    </div>

</div>