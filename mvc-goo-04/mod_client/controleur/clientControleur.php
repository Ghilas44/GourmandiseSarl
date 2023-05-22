<?php
Class ClientControleur{

    private $parametre = []; // tableau = $_REQUEST
    private $oModele; //propriété de type objet
    private $oVue;  // propriété de type objet

    public function __construct($parametre){
        $this->parametre = $parametre;
        // Création d'un objet, instance de la classe ClientModele
        $this->oModele = new ClientModele($this->parametre);
        // Création d'un objet, instance de la classe ClientVue
        $this->oVue = new ClientVue($this->parametre);
    }
    public function lister(){

        $listeClients = $this->oModele->getListeClient();

        $this->oVue->genererAffichageListe($listeClients);
    }
    public function form_consulter(){

        $unClient = $this->oModele->getUnClient();

        $this->oVue->genererAffichageFiche($unClient);
    }
}

