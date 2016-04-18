<?php

namespace Controller;

use \W\Controller\Controller;

use Manager\EvenementManager;

class AffichageController extends Controller
{
    protected $derniers_evenements;

    public function __construct()
    {
        $this->derniers_evenements = new EvenementManager();
    }

    public function afficherDerniersEvenements()
    {

        $infos['derniers_evenements'] = $this->derniers_evenements->findAll('date', 'DESC', 2, 0);
        $this->show('affichage/derniers_evenements', $infos);
    }

    public function afficherEvenement()
    {
        $this->show('affichage/evenement_description');
    }

    public function afficherRecherche()
    {
        $this->show('affichage/recherche');
    }

}