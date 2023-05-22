<?php
Class ProduitTable{
    private $reference = "";
    private $designation = "";
    private $quantite = "";
    private $descriptif = "";
    private $prix_unitaire_HT = "";
    private $stock = "";
    private $poids_piece = "";

    private $autorisationBD = true;

    private static $messageErreur = "";
    private static $messageSucces = "";

    public function __construct($data = null){
//$data est UN TABLEAU
        if($data !=null) {
            $this->hydrater($data);
        }
    }

    public function hydrater(array $row){
//$row est un TABLEAU
        foreach ($row as $k => $v){
            //concaténation du préfixe set et du nom de la propriété avec
            // La première lettre en majuscule
            $setter = 'set'.ucfirst($k);
            if(method_exists($this,$setter)){
                // On appelle la méthode
                //                   $this->setNom($nom);
                $this->$setter($v);
            }
        }
    }

    //GETTERS
    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @return string
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * @return string
     */
    public function getPrix_unitaire_HT()
    {
        return $this->prix_unitaire_HT;
    }

    /**
     * @return string
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @return string
     */
    public function getPoids_piece()
    {
        return $this->poids_piece;
    }

    public function getAutorisationBD()
    {
        return $this->autorisationBD;
    }

    /**
     * @return string
     */
    public static function getMessageErreur()
    {
        return self::$messageErreur;
    }

    /**
     * @return string
     */
    public static function getMessageSucces()
    {
        return self::$messageSucces;
    }

    //SETTERS
    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @param string $designation
     */
    public function setDesignation(string $designation): void
    {
        $this->designation = $designation;
    }

    /**
     * @param string $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @param string $descriptif
     */
    public function setDescriptif(string $descriptif): void
    {
        $this->descriptif = $descriptif;
    }

    /**
     * @param string $prix_unitaire_HT
     */
    public function setPrix_unitaire_HT($prix_unitaire_HT): void
    {

            $this->prix_unitaire_HT = $prix_unitaire_HT;
    }

    /**
     * @param string $stock
     */
    public function setStock($stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @param string $poids_piece
     */
    public function setPoids_piece($poids_piece): void
    {
        $this->poids_piece = $poids_piece;
    }
    public function setAutorisationBD(bool $autorisationBD)
    {
        $this->autorisationBD = $autorisationBD;
    }

    /**
     * @param string $messageErreur
     */
    public static function setMessageErreur(string $messageErreur)
    {
        self::$messageErreur = self::$messageErreur . $messageErreur;
    }

    /**
     * @param string $messageSucces
     */
    public static function setMessageSucces(string $messageSucces)
    {
        self::$messageSucces = self::$messageSucces . $messageSucces;
    }

}