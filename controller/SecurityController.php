<?php

// verifier si l'utilisateur est connecté

class SecurityController {

    public static function isLog(){
        // si la variable de session n'est pas
        // vide alors on retourne les infos de la table user
        return (!empty($_SESSION['user']));
    }
}