<?php

namespace Controller;

use \W\Controller\Controller;

class AffichageController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    public function afficherDerniersEvenements()
    {
        $this->show('affichage/derniers_evenements');
    }

    public function afficherEvenement()
    {
        $this->show('affichage/evenement');
    }

    public function afficherRecherche()
    {
        $this->show('affichage/recherche');
    }

}