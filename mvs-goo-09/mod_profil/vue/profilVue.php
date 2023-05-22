<?php
Class ProfilVue{
    private $parametre = [] ;
    private $tpl; // propriété de type objet (smarty)
    public function __construct($parametre)
    {
        $this->parametre = $parametre;

        $this->tpl = new Smarty();

    }
    public function genererAffichageFiche(){
        $this->tpl->assign('deconnexion', 'Déconnexion');

        $this->tpl->assign('tabBord', 'Ici le tableau');

        $this->tpl->assign('titreVue', 'Gourmandise SARL');

        $this->tpl->assign('titrePage', 'Vos informations');

        $this->tpl->assign('login', $_SESSION['prenomNom']);

        $this->tpl->assign('NomVendeur', $_SESSION['prenomNom']);

        $this->tpl->assign('codeVendeur', $_SESSION['codev']);

        $this->tpl->assign('adresseVendeur', $_SESSION['adresse']);

        $this->tpl->assign('villeVendeur', $_SESSION['ville']);

        $this->tpl->assign('cpVendeur', $_SESSION['cp']);

        $this->tpl->assign('telVendeur', $_SESSION['telephone']);

        $this->tpl->assign('readonly', 'disabled');

        $this->tpl->display('mod_profil/vue/profilFicheVue.tpl');


    }
}
