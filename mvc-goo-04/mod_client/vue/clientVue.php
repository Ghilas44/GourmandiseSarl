<?php
Class ClientVue{
    private $parametre = [] ;
    private $tpl; // propriété de type objet (smarty)
    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }
    public function chargementValeurs(){
        $this->tpl->assign('deconnexion', 'Déconnexion');

        $this->tpl->assign('login', 'Ici le nom de l\'utilisateur');

        $this->tpl->assign('titreVue', 'Gourmandise SARL');

    }
    public function genererAffichageListe($valeurs){
        $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Liste des clients');

        $this->tpl->assign('listeClients',$valeurs);

        $this->tpl->display('mod_client/vue/clientListeVue.tpl');
    }

    public function genererAffichageFiche($valeurs){

        $this->chargementValeurs();

        $this->tpl->assign('titrePage', 'Fiche client :  Consultation');

        $this->tpl->assign('unClient',$valeurs);

        $this->tpl->display('mod_client/vue/clientFicheVue.tpl');
    }
}