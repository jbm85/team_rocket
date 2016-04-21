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
     */

    public function __construct()
    {
        $this->membre = new MembreManager();
        $this->validator = new AuthentificationManager();
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
            $_SESSION['user'][$key] = $value;
        }
    }


    /*
     * Inscription d'un membre :
     */

    public function afficherInscription()
    {
        if (isset($_POST['envoi-inscription'])) {

            $utilisateur = ToolsController::remplirLesPosts($_POST);

            if (!empty($utilisateur['pseudo']) && !empty($utilisateur['email']) && !empty($utilisateur['mot_de_passe']) && !empty($utilisateur['password_confirm']) && !empty($utilisateur['genre']) && !empty($utilisateur['date_de_naissance'])) {

                $utilisateur['date_de_naissance'] = ToolsController::convertDateUs($utilisateur['date_de_naissance']);

                $utilisateur['admin'] = 'off';
                
                if (preg_match('/@/', $utilisateur['email'])) {

                    if ($this->membre->emailExists($utilisateur['email']) || $this->membre->usernameExists($utilisateur['pseudo'])) {

                        $this->redirectToRoute('inscription_msg', ['msg' => 'error_email_pseudo']);

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

                    $this->redirectToRoute('inscription_msg', ['msg' => 'error_email']);

                }
            }else{
                $this->redirectToRoute('inscription_msg', ['msg' => 'error_champs']);
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
            case 'error_champs' :
                $infos['msg'] = 'Pour vous inscrire, nous avons besoin au minimum d\'un pseudo, d\'une adresse email, d\'un mot de pass, de votre date de naissance et de votre genre afin de pouvoir vous orienté au mieux sur le site';
                $infos['classe'] = 'alert-danger';
                break;
            case 'error_email_pseudo' :
                $infos['msg'] = 'Désolé, cet email ou ce pseudo sont déjà pris, essayez en un autre.';
                $infos['classe'] = 'alert-danger';
                break;
            case 'error_email' :
                $infos['msg'] = 'Désolé l\'adresse email n\'est pas conforme';
                $infos['classe'] = 'alert-danger';
                break;
            case 'error_password' :
                $infos['msg'] = 'Désolé les deux mots de pass ne sont pas identiques';
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

    public function afficherConnexion()
    {
        if (isset($_POST['envoi-connexion'])){

            $membre = ToolsController::remplirLesPosts($_POST);

            if (!empty($membre)){ //Test si le tableau $membre n'est pas vide


                if ($this->validator->isValidLoginInfo($membre['email'], $membre['mdp'])){

                    $session_membre = $this->membre->getUserByUsernameOrEmail($membre['email']);

                    $this->remplirSession($session_membre);
                    $this->validator->logUserIn($session_membre);
 
                    $this->redirectToRoute('profil');
                }
            }
        }
        $this->show('membre/connexion');
    }
    
    
    /*
     * Déconnexion d'un membre :
     */
    
    public function deconnexionMembre(){
        $this->validator->logUserOut();
        $this->redirectToRoute('accueil');
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