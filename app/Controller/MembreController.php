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
        if (isset($_POST['envoi-inscription'])) {

            $utilisateur = ToolsController::remplirLesPosts($_POST);

            if (!empty($utilisateur['pseudo']) && !empty($utilisateur['email']) && !empty($utilisateur['mot_de_passe']) && !empty($utilisateur['password_confirm']) && !empty($utilisateur['genre']) && !empty($utilisateur['date_de_naissance'])) {

                $utilisateur['date_de_naissance'] = ToolsController::convertDateUs($utilisateur['date_de_naissance']);

                $utilisateur['admin'] = 'off';

                if (preg_match('/@/', $utilisateur['email'])) {



                    if ($this->membre->emailExists($utilisateur['email']) || $this->membre->usernameExists($utilisateur['pseudo'])) {

                        $this->show('membre/inscription', ['msg' => 'Désolé, cet email ou ce pseudo sont déjà pris, essayez en un autre.']);

                    } else {


                        if ($utilisateur['mot_de_passe'] == $utilisateur['password_confirm']) {
                            $utilisateur['mot_de_passe'] = password_hash($utilisateur['mot_de_passe'], PASSWORD_DEFAULT);

                            if (isset($utilisateur['password_confirm'])) unset($utilisateur['password_confirm']);

                            $sess_utilisateur = $this->membre->insert($utilisateur);

                            $this->remplirSession($sess_utilisateur);

                        } else {

                            $this->show('membre/inscription', ['msg' => 'Désolé les deux mots de pass ne sont pas identiques']);
                        }


                        if ( !empty($_FILES['photo']['name'])) {

                            if ($_FILES['photo']['size'] < 2097152){

                                if (ToolsController::checkExtensionImg($_FILES['photo']['name'])) {

                                    $photo = (!empty($_FILES['photo']['name'])) ? strToLower($_SESSION['user']['id'] . '_' . $_SESSION['user']['nom'] . '_' . $_FILES['photo']['name']) : '';
                                    $source_photo = $_FILES['photo']['tmp_name'];
                                    $destination_photo = 'C:/wamp/www/team_rocket/public/assets/img/photo_profil/' . $photo;

                                    if (!empty($source_photo)) {

                                        copy($source_photo, $destination_photo);
                                        $this->membre->modifPhotoProfil($photo, $_SESSION['user']['id']);

                                    }

                                } else {
                                    $this->show('membre/inscription', ['msg' => 'Le format de votre photo n\'est pas conforme. Veuillez entré une photo au format jpg, jpeg, png ou gif']);
                                }
                            } else{
                                $this->show('membre/inscription', ['msg' => 'La taille de votre fichier est trop lourde ! Veuillez ne pas dépasser 2 Mo pour votre photo.']);

                            }
                        }

                        $this->redirectToRoute('profil');
                    }
                } else {

                    $this->show('membre/inscription', ['msg' => 'Désolé, le format de l\'adresse email n\'est pas conforme']);

                }
            } else {
                $this->show('membre/inscription', ['msg' => 'Pour vous inscrire, nous avons besoin au minimum d\'un pseudo, d\'une adresse email, d\'un mot de pass, de votre date de naissance et de votre genre afin de pouvoir vous orienté au mieux sur le site']);
            }
        }
        $this->show('membre/inscription');
    }


    /*
     * Affichage de la connexion :
     */

    public function afficherConnexion()
    {
        if (isset($_POST['envoi-connexion'])) {

            $membre = ToolsController::remplirLesPosts($_POST);

            if (!empty($membre)) { //Test si le tableau $membre n'est pas vide

                // $this->show('debug', ['debug' => $this->validator->isValidLoginInfo($membre['email'], $membre['mot_de_passe'])]);
                if ($this->validator->isValidLoginInfo($membre['email'], $membre['mot_de_passe'])) {

                    $session_membre = $this->membre->getUserByUsernameOrEmail($membre['email']);
                    $this->validator->logUserIn($session_membre);

                    $this->redirectToRoute('profil');
                } else {
                    $this->show('membre/connexion', ['msg' => 'Désolé, vos identifiants sont incorrects!']);

                }
            }
        }
        $this->show('membre/connexion');
    } //TODO : Voir les problèmes de connexion avec Ziad


    /*
     * Déconnexion d'un membre :
     */

    public function deconnexionMembre()
    {
        $this->validator->logUserOut();
        $this->redirectToRoute('accueil');
    }

    /*
    * Changer mot de passe :
    */

    public function mdpRecup()
    {
        if (isset($_POST['reset-mdp'])) {

            $membre = ToolsController::remplirLesPosts($_POST);
            $check_email = $this->membre->emailExists($membre['email']);
            if ($check_email !== false) {
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
     * Affichage d'un formulaire pour modifier son profil
     */

    public function afficherModifierProfil()
    {

        if (isset($_SESSION['user'])){

            $this->validator->refreshUser();

            if (isset($_POST['sauvegarder'])) {

                $modif_profil = ToolsController::remplirLesPosts($_POST);

                if ( !empty($_FILES['photo']['name'])) {

                    if ($_FILES['photo']['size'] < 2097152){

                        if (ToolsController::checkExtensionImg($_FILES['photo']['name'])) {

                            $photo = (!empty($_FILES['photo']['name'])) ? strToLower($_SESSION['user']['id'] . '_' . $_SESSION['user']['nom'] . '_' . $_FILES['photo']['name']) : '';
                            $source_photo = $_FILES['photo']['tmp_name'];
                            $destination_photo = 'C:/wamp/www/team_rocket/public/assets/img/photo_profil/' . $photo;

                            if (!empty($source_photo)) {

                                copy($source_photo, $destination_photo);
                                $this->membre->modifPhotoProfil($photo, $_SESSION['user']['id']);

                            }

                        } else {
                            $this->show('membre/modifier_profil', ['msg' => 'Le format de votre photo n\'est pas conforme. Veuillez entré une photo au format jpg, jpeg, png ou gif']);
                        }
                    } else{
                        $this->show('membre/modifier_profil', ['msg' => 'La taille de votre fichier est trop lourde ! Veuillez ne pas dépasser 2 Mo pour votre photo.']);

                    }
                }

                if (!empty($modif_profil)){

                    $modif_profil_sql = $this->membre->update($modif_profil, $_SESSION['user']['id'], ['strip_tags']);

                    if ($modif_profil_sql !== false){

                        $this->validator->refreshUser();
                        $this->redirectToRoute('profil');

                    } else {

                        $this->show('membre/modifier_profil', ['msg' => 'Ce pseudo ou email est déjà existant. Veuillez choisir de nouveaux identifiants']);
                    }


                    
                }
            }

            $this->show('membre/modifier_profil');

        } else {

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

            $this->validator->refreshUser();
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
        if (isset($_POST['creer-evenement'])) {
            $evenement = ToolsController::remplirLesPosts($_POST);

            if (!empty($evenement['titre']) && !empty($evenement['theme']) && !empty($evenement['public']) && !empty($evenement['descriptif']) && !empty($evenement['adresse']) && !empty($evenement['ville']) && !empty($evenement['code_postal']) && !empty($evenement['capacite']) && !empty($evenement['date_debut']) && !empty($evenement['heure_debut']) && !empty($evenement['date_fin']) && !empty($evenement['heure_fin'])) {

                if ((strlen($_POST['code_postal']) === 5) && (is_numeric($_POST['code_postal']))) {
                    if (is_numeric($_POST['capacite'])) {

                        $evenement['date_debut'] = ToolsController::convertDateUs($evenement['date_debut']);
                        $evenement['date_fin'] = ToolsController::convertDateUs($evenement['date_fin']);
                        $this->membre->setTable('evenements');

                        $sess_evenement = $this->membre->insert($evenement);

                    } else {
                        $this->show('membre/creer_evenement', ['msg' => 'La capacité doit être numérique']);
                    }


                }else {
                    $this->show('membre/creer_evenement', ['msg' =>'Le code postal doit être constitué uniquement de chiffre et ne pas dépassé 5 chiffres']);
                }


            } else {
                $this->show('membre/creer_evenement', ['msg' => 'Désolé, tous les champs sauf les photos sont obligatoires']);
            }
            for ($i = 1; $i < 4; $i++) :
            if ( !empty($_FILES['photo_'.$i]['name'])) {

                if ($_FILES['photo_'.$i]['size'] < 2097152){

                    if (ToolsController::checkExtensionImg($_FILES['photo_'.$i]['name'])) {

                        $photo = (!empty($_FILES['photo_'.$i]['name'])) ? strToLower($i . '_' . $evenement['titre'] . '_' . $_FILES['photo_'.$i]['name']) : '';
                        $source_photo = $_FILES['photo_'.$i]['tmp_name'];
                        $destination_photo = 'C:/wamp/www/team_rocket/public/assets/img/photo_evenement/' . $photo;

                        if (!empty($source_photo)) {

                            copy($source_photo, $destination_photo);

                            $this->membre->insertPhotoEvenement($photo, $sess_evenement['id'], $i);

                        }

                    } else {
                        $this->show('membre/creer_evenement', ['msg' => 'Désolé l\'extension de vos images ou photos n\'est pas conforme']);
                    }
                } else{
                    $this->show('membre/creer_evenement', ['msg' => 'Désolé, la taille de vos images ou photos est trop lourde (2 Mo Max.)']);

                }
            }
            endfor;
            $this->show('membre/creer_evenement', ['msg' => 'Bravo votre évènement a été publié avec succès !']);
        }
        $this->show('membre/creer_evenement');
    }


    public function afficherGestionMembre()
    {
        $tabMembre = $this->membre->recupInfoMembre();


        $info['tabmembre'] = $tabMembre;
        //$this->show('debug',$info);
            
        $this->show('admin/gestion_membre', $info);

    }

    public function supprimeGestionMembre($id)
    {
        $suppr = $this->membre->delete($id);
        if($suppr > 0){
            $this->show('admin/gestion_membre');
        }
    }
}
