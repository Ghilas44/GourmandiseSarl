<?php
require_once 'include/configuration.php';
// gestion = ? client, produit, profil, accueil ?
// action = ? lister (action par défaut), ajouter, modifier, supprimer, rechercher, trier, ...
// action = form_ajouter (appel formulaire vierge), form_consulter (formulaire en consultation)

// Existe GET pour rechercher et POST pour écriture
// Mais aussi request

if(!isset($_REQUEST['gestion'])){

    $_REQUEST['gestion'] = 'accueil';

}

// Appel du routeur (accueil.php, client.php, ...)
require_once 'mod_'.$_REQUEST['gestion'].'/'.$_REQUEST['gestion'].'.php';

// Création d'un objet, instance de la classe de type (routeur) accueil (client, produit, ...)
$oRouteur = new $_REQUEST['gestion']($_REQUEST);