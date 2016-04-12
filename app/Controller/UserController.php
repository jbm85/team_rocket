<?php

namespace Controller;

use \W\Controller\Controller;

class UserController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    public function afficherConnexion()
    {
        $this->show('User/connexion');
    }

    public function afficherCreerEvenement()
    {
        $this->show('User/creer_evenement');
    }

    public function afficherInscription()
    {
        $this->show('User/inscription');
    }

    public function afficherModifierProfil()
    {
        $this->show('User/modifier_profil');
    }

    public function afficherPanier()
    {
        $this->show('User/panier');
    }

    public function afficherProfil()
    {
        $this->show('User/profil');
    }

}