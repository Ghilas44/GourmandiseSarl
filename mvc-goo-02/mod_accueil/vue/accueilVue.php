<?php
class AccueilVue{

    private $parametre = [] ;
    private $tpl; // propriété de type objet (smarty)
    public function __construct($parametre){
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

        $this->tpl->assign('deconnexion', 'Déconnexion');

        $this->tpl->assign('login', 'Ici le nom de l\'utilisateur');

        $this->tpl->assign('tabBord', 'Ici le tableau de bord');

        $this->tpl->display('mod_accueil/vue/accueilVue.tpl');
//        $titrePrincipal =  "GOURMANDISE SARL";

//        require_once 'mod_accueil/vue/vue.php';
    }
}