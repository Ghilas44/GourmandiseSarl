<?php
Class ClientModele extends Modele{

    private $parametre= []; //Tableau = $_REQUEST du fichier index

    public function __construct($parametre){

        $this->parametre = $parametre;

    }

    public function getListeClient(){

        $sql = "SELECT * FROM client";

        $idRequete = $this->executeRequete($sql); // requête simple

        if($idRequete->rowCount() > 0 ){
            while($row = $idRequete->fetch(PDO::FETCH_ASSOC)){

               $listeClients[] = new ClientTable($row);
            }
            return $listeClients;
        }else{
            return null;
        }

    }
    public function getUnClient(){
        $sql = "SELECT * FROM client WHERE codec = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['codec']]); // requête préparée

        return new ClientTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }

    public function addClient(ClientTable $valeurs){
        $sql = "INSERT INTO client (nom, adresse, cp, ville, telephone) VALUES (?, ?, ?, ?, ?)";

        $idRequete = $this->executeRequete($sql,[
            $valeurs->getNom(),
            $valeurs->getAdresse(),
            $valeurs->getCp(),
            $valeurs->getVille(),
            $valeurs->getTelephone()
        ]);

        if($idRequete){

            ClientTable::setMessageSucces("Création du client correctement effectuée.");
        }
    }

    public function deleteClient(ClientTable $valeurs){
        $sql = "DELETE FROM client where codec = ?";
        $idRequete = $this->executeRequete($sql,[
            $valeurs->getCodec()
        ]);
        if($idRequete){
            ClientTable::setMessageSucces("Suppression du client correctement effectuée.");
        }
    }

    public function updateClient(ClientTable $valeurs){
        $sql = "UPDATE client SET nom=?, adresse=?, cp=?, ville=?, telephone=? WHERE codec=?";

        $idRequete = $this->executeRequete($sql,[
            $valeurs->getNom(),
            $valeurs->getAdresse(),
            $valeurs->getCp(),
            $valeurs->getVille(),
            $valeurs->getTelephone(),
            $valeurs->getCodec()
        ]);

        if($idRequete){
            ClientTable::setMessageSucces("Modification du client correctement effectuée.");
        }
    }



}

