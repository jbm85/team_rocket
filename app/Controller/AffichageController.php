<?php

namespace Controller;

use \W\Controller\Controller;

use Manager\EvenementManager;

class AffichageController extends Controller
{
    protected $derniers_evenements;
    protected $details_evenement;

    public function __construct()
    {
        $this->derniers_evenements = new EvenementManager();
    }

    public function afficherDerniersEvenements()
    {

        $infos['derniers_evenements'] = $this->derniers_evenements->findAll('date', 'DESC', 10, 0);
        $this->show('affichage/derniers_evenements', $infos);
    }

    public function afficherEvenement()
    {
        $infos['details_evenement'] = $this->details_evenement->find($value['id']); //TODO: Voir comment recuperer l'id
        $this->show('affichage/evenement_description');
    }

    public function afficherRecherche()
    {
        $this->show('affichage/recherche');
    }

}