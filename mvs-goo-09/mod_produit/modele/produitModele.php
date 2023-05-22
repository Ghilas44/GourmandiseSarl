<?php

class ProduitModele extends Modele
{

    private $parametre = []; //Tableau = $_REQUEST du fichier index

    public function __construct($parametre)
    {

        $this->parametre = $parametre;

    }

    public function getListeProduit()
    {

        $sql = "SELECT * FROM produit";

        $idRequete = $this->executeRequete($sql); // requête simple

        if ($idRequete->rowCount() > 0) {
            while ($row = $idRequete->fetch(PDO::FETCH_ASSOC)) {

                $listeProduits[] = new ProduitTable($row);
            }
            return $listeProduits;
        } else {
            return null;
        }

    }

    public function getUnProduit()
    {
        $sql = "SELECT * FROM produit WHERE reference = ?";
        $idRequete = $this->executeRequete($sql, [$this->parametre['reference']]); // requête préparée

        return new ProduitTable($idRequete->fetch(PDO::FETCH_ASSOC));
    }


    public function addProduit(ProduitTable $valeurs)
    {
        $sql = "INSERT INTO produit (designation, quantite, descriptif, prix_unitaire_HT, stock, poids_piece) VALUES (?, ?, ?, ?, ?, ?)";

        $idRequete = $this->executeRequete($sql,[
            $valeurs->getDesignation(),
            $valeurs->getQuantite(),
            $valeurs->getDescriptif(),
            $valeurs->getPrix_unitaire_HT(),
            $valeurs->getstock(),
            $valeurs->getPoids_piece()
        ]);

        if ($idRequete) {

            ProduitTable::setMessageSucces("Création du Produit correctement effectuée.");
        }
    }

    public function deleteProduit(ProduitTable $valeurs)
    {
        $sql = "DELETE FROM produit where reference = ?";
        $idRequete = $this->executeRequete($sql, [
            $valeurs->getReference()
        ]);
        if ($idRequete) {
            ProduitTable::setMessageSucces("Suppression du produit correctement effectuée.");
        }
    }

    public function updateProduit(ProduitTable $valeurs)
    {
        $sql = "UPDATE produit SET designation=?, quantite=?, descriptif=?, prix_unitaire_HT=?, stock=?, poids_piece=? WHERE reference=?";

        $idRequete = $this->executeRequete($sql, [
                $valeurs->getDesignation(),
                $valeurs->getQuantite(),
                $valeurs->getDescriptif(),
                $valeurs->getPrix_unitaire_HT(),
                $valeurs->getstock(),
                $valeurs->getPoids_piece(),
                $valeurs->getReference()
        ]);

        if ($idRequete) {
            ProduitTable::setMessageSucces("Modification du produit correctement effectuée.");
        }
    }


}

