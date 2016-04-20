<?php

namespace Controller;

use \W\Controller\Controller;

use Manager\EvenementManager;

class AffichageController extends Controller
{
    protected $evenements;

    public function __construct()
    {
        $this->evenements = new EvenementManager();
    }

    public function afficherDerniersEvenements()
    {

        $infos['derniers_evenements'] = $this->evenements->findAll('date_debut', 'DESC', 10, 0);
        $this->show('affichage/derniers_evenements', $infos);
    }

    public function afficherEvenement($id)
    {
        $infos['details_evenement'] = $this->evenements->find($id);
        $this->show('affichage/evenement_description', $infos);
    }

    public function afficherRecherche()
    {
        $this->show('affichage/recherche');
    }

}