<?php
class AccueilVue{

    private $parametre = [] ;

    public function __construct($parametre){
        $this->parametre = $parametre;



        $titrePrincipal =  "GOURMANDISE SARL";

        require_once 'mod_accueil/vue/vue.php';
    }
}