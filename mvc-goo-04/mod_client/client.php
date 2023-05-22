<?php

//Routeur pour le client
class Client{

    private $parametre = []; // Tableau =$_REQUEST
    private $ocontroleur; //propriété de type objet

    public function __construct($parametre){
        //Initialisation de la propriété parametre
        $this->parametre = $parametre;
        // Chargement ou appel du controleur

        // Création d'un objet, instance de la classe ClientControleur
        $this->oControleur = new ClientControleur($this->parametre);
    }

    public function choixAction(){

        // Ici, à venir une structure alternative pour tester les différentes actions pour tester
        // Les différentes actions possibles (type switch)
        if(isset($this->parametre['action'])){
            //Traitement des différentes actions
            switch($this->parametre['action']){
                case 'form_consulter' :
                    $this->oControleur->form_consulter();
                    break;
            }

        }else{

            $this->oControleur->lister();

        }
    }
}