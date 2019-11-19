<?php

namespace JForteroche\Blog\Model;

require_once('model/Manager.php');

class AdminManager extends Manager

{
    

    

    function connexionChecks()
    {

        // Fonction qui permet de vérifier si l'id et le mot de passe sont bons
        // Alors on peut basculer le status de connexion à true, sinon false (permettra d'afficher les menus et pages si connecté)
    }

    
}
