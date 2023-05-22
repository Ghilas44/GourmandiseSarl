<?php
Class ClientTable{

    private $codec=""; //getCodec | setCodec
    private $nom=""; // getPrix_unitaire_HT
    private $adresse="";
    private $cp="";
    private $ville="";
    private $telephone="";

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
 // Getters
    /**
     * @return mixed
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @return bool
     */
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

 // Setters
    /**
     * @param mixed $codec
     */
    public function setCodec($codec)
    {
        $this->codec = $codec;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        if(empty($nom) || ctype_space(strval($nom))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le nom est obligatoire. <br>");
        }
        $this->nom = $nom;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        if(empty($adresse) || ctype_space(strval($adresse))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("L'adresse est obligatoire. <br>");
        }
        $this->adresse = $adresse;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        if(empty($cp) || ctype_space(strval($cp))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le code postal est obligatoire. <br>");
        }
        $this->cp = $cp;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
        if(empty($ville) || ctype_space(strval($ville))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("La ville est obligatoire. <br>");
        }
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        if(empty($telephone) || ctype_space(strval($telephone))) {
            $this->setAutorisationBD(false);
            self :: setMessageErreur("Le téléphone est obligatoire. <br>");
        }
        $this->telephone = $telephone;
    }

    /**
     * @param bool $autorisationBD
     */
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