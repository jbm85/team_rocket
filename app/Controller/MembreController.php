<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\MembreManager;

class MembreController extends Controller
{
    protected $membre;

    public function __construct()
    {
        $this->membre = new MembreManager();
    }

    /**
     * Page d'accueil par défaut
     */
    public function afficherConnexion()
    {
        $this->show('membre/connexion');
    }

    public function afficherCreerEvenement()
    {
        $this->show('membre/creer_evenement');
    }

    public function remplirLesPosts(array $posts)
    {
        $utilisateur = array();
        foreach($posts as $key => $value) {
            if($key !== 'submit' && $key !== 'photo' && $key !== 'gender' && $key !== 'passwordConfirm')
                $utilisateur[$key] = !empty($value) ? trim($value) : '';
        }
        return $utilisateur; // on renvoi un tableau qui contient les posts
    }

    public function remplirSession(array $data)
    {
        foreach($data as $key => $value) {
            $_SESSION['membre'][$key] = $value;
        }
    }

    public function afficherInscription()
    {
        if (isset($_POST['submit'])) {
            $utilisateur = $this->remplirLesPosts($_POST);
            if(!empty($utilisateur)) {
                $utilisateur['admin'] = 'off';
                $sess_utilisateur = $this->membre->insert($utilisateur);
                $this->remplirSession($sess_utilisateur);
                $this->redirectToRoute('profil');
            }
            $this->show('membre/inscription');
        }
        $this->show('membre/inscription');
    }

    public function afficherModifierProfil()
    {
        $this->show('membre/modifier_profil');
    }

    public function afficherPanier()
    {
        $this->show('membre/panier');
    }

    public function afficherProfil()
    {
        $this->show('membre/profil');
    }

}