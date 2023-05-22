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

    public function form_ajouter(){
        $prepareClient = new ClientTable();

        $this->oVue->genererAffichageFiche($prepareClient);
    }

    public function ajouter(){
        // Quel algo ?
        // Controler les données en provenance du formulaire (saisie utilisateur)

        // Si un problème survient alors,
        //                Retour au formulaire de saisie avec les données préalablement saisies par l'utilisateur
        //                Avec message d'erreur (information)
        // Sinon
        // Ecriture en BD
        // Retour sur la liste des clients
        // Avec un message de succès "Client correctement créé."
        // Fin

        $controleClient = new ClientTable($this->parametre);

//        var_dump($controleClient);
//        die();
        if($controleClient->getAutorisationBD() == false){
           //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleClient);
        }else{
            // Insertion BD puis retour liste des clients
            $this->oModele->addClient($controleClient);
            $this->lister();
        }
    }

    public function form_supprimer(){

        $unClient = $this->oModele->getUnClient();

        $this->oVue->genererAffichageFiche($unClient);
    }

    public function supprimer(){
        $controleClient = new ClientTable($this->parametre);
        $this->oModele->deleteClient($controleClient);
        $this->lister();
    }

    public function form_modifier(){

        $unClient = $this->oModele->getUnClient();

        $this->oVue->genererAffichageFiche($unClient);
    }

    public function modifier(){
        $controleClient = new ClientTable($this->parametre);
        $this->oModele->updateClient($controleClient);
        $this->lister();
    }
}

