<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\MembreManager;
use W\Security\AuthentificationManager;

class MembreController extends Controller
{
    protected $membre;
    protected $validator;


    /*
     * Constructor
     * */

    public function __construct()
    {
        $this->membre = new MembreManager();
        $this->validator = new AuthentificationManager();
    }


    /*
     * Récupérer les posts en dynamique
     */

    public function remplirLesPosts(array $posts)
    {
        $utilisateur = array();
        foreach ($posts as $key => $value) {
            if ($key !== 'envoi-inscription' && $key !== 'envoi-connexion' && $key !== 'photo_profil')
                $utilisateur[$key] = !empty($value) ? trim($value) : '';
        }
        return $utilisateur; // on renvoi un tableau qui contient les posts sinon on renvoi un tableau vide
    }


    /*
     * Créer une session
     */

    public function remplirSession(array $data)
    {
        foreach ($data as $key => $value) {
            if ($key == 'date_de_naissance') {
                $value = ToolsController::dateEnFr($value);
            }
            $_SESSION['membre'][$key] = $value;
        }
    }


    /*
     * Fonction pour convertir la date au format francais en date anglaise(BDD MySQL) :
     */

    public function convertDateUs($date_fr)
    {
        if (preg_match('/\//', $date_fr)) {
            $date = explode('/', $date_fr);
            $date_us = $date[2] . '-' . $date[1] . '-' . $date[0];
            return $date_us;
        } else if (preg_match('/-/', $date_fr)) {
            $date = explode('-', $date_fr);
            $date_us = $date[2] . '-' . $date[1] . '-' . $date[0];
            return $date_us;
        }
        return false;
    }


    /*
     * Inscription d'un membre :
     */

    public function afficherInscription()
    {
        if (isset($_POST['envoi-inscription'])) {

            $utilisateur = $this->remplirLesPosts($_POST);

            if (!empty($utilisateur)) {

                $utilisateur['date_de_naissance'] = $this->convertDateUs($utilisateur['date_de_naissance']);

                $utilisateur['admin'] = 'off';
                
                if (preg_match('/@/', $utilisateur['email'])) {

                    if ($this->membre->emailExists($utilisateur['email']) && $this->membre->usernameExists($utilisateur['pseudo'])) {

                        $this->redirectToRoute('inscription_msg', ['msg' => 'error_email']);

                    } else {

                        if ($utilisateur['mot_de_passe'] == $utilisateur['password_confirm']) {

                            $utilisateur['mot_de_passe'] = password_hash($utilisateur['mot_de_passe'], PASSWORD_DEFAULT);

                            if (isset($utilisateur['password_confirm'])) unset($utilisateur['password_confirm']);

                            $sess_utilisateur = $this->membre->insert($utilisateur);

                            $this->remplirSession($sess_utilisateur);

                            $this->redirectToRoute('profil');

                        } else {

                            $this->redirectToRoute('inscription_msg', ['msg' => 'error_password']);
                        }
                    }
                }else {

                    $this->redirectToRoute('inscription_msg', ['msg' => 'error_email_2']);

                }
            }
        }
        $this->show('membre/inscription');
    }


    /*
     * Afficher un message d'erreur à l'utilisateur :
     */

    public function afficherInscriptionMsg($msg)
    {
        switch ($msg) {
            case 'error_email' :
                $infos['msg'] = 'Désolé cet email est déjà pris, essayez en un autre.';
                $infos['classe'] = 'alert-danger';
                break;
            case 'error_password' :
                $infos['msg'] = 'Désolé les deux mots de pass ne sont pas identiques';
                $infos['classe'] = 'alert-danger';
                break;
            case 'error_email_2' :
                $infos['msg'] = 'Désolé l\'adresse email n\'est pas conforme';
                $infos['classe'] = 'alert-danger';
                break;
            default :
                $infos['msg'] = '';
        }
        $this->show('membre/inscription', $infos);
    }


    /*
     * Affichage de la connexion :
     */

    public function afficherConnexion() //TODO:Problème de connexion
    {
        if (isset($_POST['envoi-connexion'])){ //TODO:non fonctionnel
            $membre = $this->remplirLesPosts($_POST);


            if (!empty($membre)){
                if ($this->validator->isValidLoginInfo($membre['email'], $membre['mdp'])){
                    $session_membre = $this->membre->getUserByUsernameOrEmail($membre['email']);

                    $info['debug'] = $membre;
                    $this->show('debug',$info);

                    $this->remplirSession($session_membre);
                    $this->validator->logUserIn($session_membre);
                    $this->show('membre/profil', $membre);
                    $this->redirectToRoute('profil');
                }
            }
        }
        $this->show('membre/connexion');
    }


    /*
     * Affichage d'un formulaire pour modifier son profil
     */

    public function afficherModifierProfil()
    {
        $this->show('membre/modifier_profil');
    }


    /*
     * Affichage du panier :
     */
    public function afficherPanier()
    {
        $this->show('membre/panier');
    }


    /*
     * Affichage du profil
     */

    public function afficherProfil()
    {
        $this->show('membre/profil');
    }


    /*
     * Affichage du formulaire pour créer un évènement
     */

    public function afficherCreerEvenement()
    {
        $this->show('membre/creer_evenement');
    }
}