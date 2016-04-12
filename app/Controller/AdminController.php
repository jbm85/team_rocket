<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    public function afficherGestionMembre()
    {
        $this->show('admin/gestion_membre');
    }

}