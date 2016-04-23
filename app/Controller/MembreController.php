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
     * Créer une session pour l'utilisateur :
     */

    public function remplirSession(array $data)
    {
        foreach ($data as $key => $value) {
            if ($key == 'date_de_naissance') {
                $value = ToolsController::dateEnFr($value);
            }
            $_SESSION['user'][$key] = trim(strip_tags($value));
        }
    }


    /*
     * Inscription d'un membre :
     */

    public function afficherInscription()
    {
        // SI le $_POST ['envoi-inscription'] existe
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
                
                if ($this->validator->isValidLoginInfo($membre['email'], $membre['mot_de_passe'])){

                    $session_membre = $this->membre->getUserByUsernameOrEmail($membre['email']);
                    $this->remplirSession($session_membre);
                    $this->validator->logUserIn($session_membre);
                    $this->redirectToRoute('profil');
                }

                else
                {
                    $this->redirectToRoute('connexionMsg', ['msg' => 'error_identifiant']);

                }
            }
        }
        $this->show('membre/connexion');
    } //TODO : Voir les problèmes de connexion avec Ziad
    
    
    /*
     * Déconnexion d'un membre :
     */
    
    public function deconnexionMembre(){
        $this->validator->logUserOut();
        $this->redirectToRoute('accueil');
    }

    /*
    * Changer mot de passe :
    */

    public function mdpRecup()
    {
        if (isset($_POST['reset-mdp'])){

            $membre = ToolsController::remplirLesPosts($_POST);
            $check_email = $this->membre->emailExists($membre['email']);
            if($check_email->rowCount()==0) {
                $info['debug'] = $check_email;
                $this->show('debug', $info);
            }
//            if($check_email->rowCount() > 0) { // si je trouve au moins 1 personne dans la BDD avec l'email saisi, le mdp est envoyé
//
//                function random($car) {
//                    $string = "";
//                    $chaine = "abcdefghijklmnpqrstuvwxy";
//                    srand((double)microtime()*1000000);
//
//                    for($i=0; $i<$car; $i++) {
//                        $string .= $chaine[rand()%strlen($chaine)];
//                    }
//
//                    return $string;
//                }
//                $chaine = random(10);
//                $new_mdp = password_hash($chaine, PASSWORD_DEFAULT) ;
//                $this->membre->envoiMdp($membre['email'], $new_mdp);
//
//                $destinataire= $membre['email'];
//                $sujet= "Votre nouveau mot de passe";
//
//                mail($destinataire,$sujet,"Nouveau mot de passe : ".$chaine);
//            }

        }
    } //TODO : Non fonctionnelle


    /*
     * Affichage d'un message d'erreur si la connexion n'est pas valide :
     */

    public function connexionMsg($msg)
    {
        if ($msg == 'error_identifiant'){
            $infos['msg'] = 'Désolé, vos identifiants sont incorrects!';
        }
        $this->show('membre/connexion',$infos);
    }


    /*
     * Affichage d'un formulaire pour modifier son profil
     */

    public function afficherModifierProfil() //TODO : A terminer
    {

        if (isset($_SESSION['user'])){

            if (isset($_POST['sauvegarder'])){

                $modif_profil = ToolsController::remplirLesPosts($_POST);

                if ( !empty($_FILES['photo']['name']) ) {

                    if (ToolsController::checkExtensionImg($_FILES['photo']['name'])) {

                        $photo = ( !empty($_FILES['photo']['name']) ) ? strToLower(
                            $_SESSION['user']['id']. '_' . $_SESSION['user']['nom'] . '_' . $_FILES['photo']['name']) : '';
                        $source_photo = $_FILES['photo']['tmp_name'];
                        $destination_photo = '/Applications/MAMP/htdocs/team_rocket/public/assets/img/photo_profil';

                        if(!empty($source_photo)){


                            copy($source_photo, $destination_photo); // je copie la photo temporaire de $_FILES dans mon dossier de photo de profil
                            $this->membre->modifPhotoProfil($photo, $_SESSION['user']['id']);
                            //$info['debug'] = $source_photo;
                            //$this->show('debug', $info);
                        }

                    }
                }
            }


            $this->show('membre/modifier_profil');
        }else{
            $this->showForbidden();
        }

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
        if (isset($_SESSION['user'])){
            $this->show('membre/profil');
        }else{
            $this->showForbidden();
        }

    } // TODO : Ameliorer le style de la page


    /*
     * Affichage du formulaire pour créer un évènement
     */

    public function afficherCreerEvenement() //TODO : Terminer les tests pour la creation d'un evenement
    {
        if (isset($_POST['creer-evenement'])){
            $evenement = ToolsController::remplirLesPosts($_POST);

            if (!empty($evenement['titre']) && !empty($evenement['theme']) && !empty($evenement['public']) && !empty($evenement['descriptif']) && !empty($evenement['adresse']) && !empty($evenement['ville']) && !empty($evenement['code_postal']) && !empty($evenement['capacite']) && !empty($evenement['date_debut']) && !empty($evenement['heure_debut']) && !empty($evenement['heure_fin'])){
                
                $evenement['date_debut'] = ToolsController::convertDateUs($evenement['date_debut']);
                $this->membre->setTable('evenements');
                //$info['debug'] = $test;
                //$this->show('debug',$info);
                $sess_evenement = $this->membre->insert($evenement);


                
            }
        }
        $this->show('membre/creer_evenement');

    }
}