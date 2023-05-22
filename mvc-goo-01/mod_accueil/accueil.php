<?php

//Routeur de la class Accueil
class Accueil{

    private $parametre = []; // Tableau =$_REQUEST
    private $ocontroleur; //propriété de type objet

    public function __construct($parametre){
        //Initialisation de la propriété parametre
        $this->parametre = $parametre;
        // Chargement ou appel du controleur
        require_once 'mod_accueil/controleur/accueilControleur.php';
        // Création d'un objet, instance de la classe AccueilControleur
        $this->oControleur = new AccueilControleur($this->parametre);
    }

}