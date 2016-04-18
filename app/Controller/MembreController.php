<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\MembreManager;
use W\Security\AuthentificationManager;

class MembreController extends Controller
{
    protected $membre;
    protected $validator;

    public function __construct()
    {
        $this->membre = new MembreManager();
        $this->validator = new AuthentificationManager();
    }

    /**
     * Page d'accueil par défaut
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
            if($key !== 'envoi-inscription' && $key !== 'photo' && $key !== 'gender' && $key !== 'passwordConfirm')
                $utilisateur[$key] = !empty($value) ? trim($value) : '';
        }
        return $utilisateur; // on renvoi un tableau qui contient les posts sinon on renvoi un tableau vide
    }

    public function remplirSession(array $data)
    {
        foreach($data as $key => $value) {
            $_SESSION['membre'][$key] = $value;
        }
    }

    public function convertDateUs($date_fr){

        if (preg_match('/\//', $date_fr)) {
            $date = explode("/", $date_fr);
            $date_us= $date[2].'-'.$date[1].'-'.$date[0];
            return $date_us;
        }

        else if(preg_match('/-/', $date_fr)){
            $date = explode("-", $date_fr);
            $date_us= $date[2].'-'.$date[1].'-'.$date[0];
            return $date_us;
        }
        return false;
    }


    public function afficherInscription()
    {

                if (isset($_POST['envoi-inscription'])) {

                    $utilisateur = $this->remplirLesPosts($_POST);

                    if (!empty($utilisateur)) {

                        $utilisateur['date_de_naissance'] = $this->convertDateUs($utilisateur['date_de_naissance']);
                        $utilisateur['admin'] = 'off';
                        if ($this->membre->emailExists($utilisateur['email']) && $this->membre->usernameExists($utilisateur['pseudo'])){

                            $this->redirectToRoute('inscription_msg', ['msg' => 'error_email']);

                        }else{

                            $utilisateur['mot_de_passe'] = password_hash($utilisateur['mot_de_passe'], PASSWORD_DEFAULT);
//                            $info['debug']=$utilisateur;
//                            $this->show('debug',$info);
                            $sess_utilisateur = $this->membre->insert($utilisateur);
                            $this->remplirSession($sess_utilisateur);
                            $this->redirectToRoute('profil');

                        }
                    }
                }

        $this->show('membre/inscription');
    }

    public function afficherInscriptionMsg($msg)
    {
        switch($msg) {
            case 'error_email' :
                $infos['msg'] = 'Désolé cet email est déjà pris, essayez en un autre.';
                $infos['classe'] = 'alert-danger';
                break;
            default :
                $infos['msg'] = '';
        }
        $this->show('membre/inscription', $infos);
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
        if(isset($_POST['envoi-connexion'])) {
            // traitment si clçic sur bouton de connexion
            $infos['coco'] = $_POST;
            $this->show('membre/connexion', $infos);
        }
        else {
            // traitement si saisi /profil directement dans l'url
            $this->show('membre/profil');
        }
    }

}