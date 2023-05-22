<?php
Class ProduitControleur{

    private $parametre = []; // tableau = $_REQUEST
    private $oModele; //propriété de type objet
    private $oVue;  // propriété de type objet

    public function __construct($parametre){
        $this->parametre = $parametre;

        $this->oModele = new ProduitModele($this->parametre);

        $this->oVue = new ProduitVue($this->parametre);
    }
    public function lister(){

        $listeProduits = $this->oModele->getListeProduit();

        $this->oVue->genererAffichageListe($listeProduits);
    }
    public function form_consulter(){

        $unProduit = $this->oModele->getUnProduit();

        $this->oVue->genererAffichageFiche($unProduit);
    }

    public function form_ajouter(){
        $prepareProduit = new ProduitTable();

        $this->oVue->genererAffichageFiche($prepareProduit);
    }

    public function ajouter(){
        // Quel algo ?
        // Controler les données en provenance du formulaire (saisie utilisateur)

        // Si un problème survient alors,
        //                Retour au formulaire de saisie avec les données préalablement saisies par l'utilisateur
        //                Avec message d'erreur (information)
        // Sinon
        // Ecriture en BD
        // Retour sur la liste des Produits
        // Avec un message de succès "Produit correctement créé."
        // Fin

        $controleProduit = new ProduitTable($this->parametre);

//        var_dump($controleProduit);
//        die();
        if($controleProduit->getAutorisationBD() == false){
            //Retour à la fiche
            $this->oVue->genererAffichageFiche($controleProduit);
        }else{
            // Insertion BD puis retour liste des produits
            $this->oModele->addProduit($controleProduit);
            $this->lister();
        }
    }

    public function form_supprimer(){

        $unProduit = $this->oModele->getUnProduit();

        $this->oVue->genererAffichageFiche($unProduit);
    }

    public function supprimer(){
        $controleProduit = new ProduitTable($this->parametre);
        $this->oModele->deleteProduit($controleProduit);
        $this->lister();
    }

    public function form_modifier(){

        $unProduit = $this->oModele->getUnProduit();

        $this->oVue->genererAffichageFiche($unProduit);
    }

    public function modifier(){
        $controleProduit = new ProduitTable($this->parametre);
        $this->oModele->updateProduit($controleProduit);
        $this->lister();
    }
}
