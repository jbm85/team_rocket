<?php

namespace Controller;

use \W\Controller\Controller;

use Manager\EvenementManager;

class AffichageController extends Controller
{
    protected $evenements;


    /*
     * Constructor :
     */
    
    public function __construct()
    {
        $this->evenements = new EvenementManager();
    }


    /*
     * Page des derniers évènements :
     */

    public function afficherDerniersEvenements()
    {

        $infos['dernier_evenement'] = $this->evenements->showLastEvents();

        foreach($infos['dernier_evenement'] as $key => $value) :
            $infos['dernier_evenement'][$key]['date'] = ToolsController::dateEnFr($value['date_debut']);
        endforeach;

        $this->show('affichage/derniers_evenements', $infos);
    }


    /*
     * Affichage du détail de l'évènement :
     */

    public function afficherEvenement($id)
    {
        $infos['details_evenement'] = $this->evenements->find($id);
        $this->show('affichage/evenement_description', $infos);
    }



    /*
     * Fonction pour afficher un message à l'utilisateur en cas d'erreur dans la page recherche :
     */

    public function searchMsgError($msg)
    {
        switch ($msg) {
            case 'error_date_1' :
                $infos['msg'] = 'Le format de la date entrée n\'est pas conforme.';
                $infos['classe'] = 'alert-danger';
                break;

            case 'error_search' :
                $infos['msg'] = 'Désolé aucune recherche ne correspond à votre demande.';
                break;

            case 'error_theme_1' :
                $infos['msg'] = 'Le format du thème n\'est pas conforme.';
                $infos['classe'] = 'alert-danger';
                break;

            case 'error_ville_1' :
                $infos['msg'] = 'Le format de la ville entré n\'est pas conforme.';
                $infos['classe'] = 'alert-danger';
                break;

            default :
                $infos['msg'] = '';
        }
    }


    /*
     * Recherche d'un évènement :
     */

    public function afficherRecherche() //TODO : Régler les bugs et afficher en dynamique
    {
        if (isset($_POST['envoi-recherche'])) {

            $recherche = ToolsController::remplirLesPosts($_POST);

            $re_date = '/^[0-9]{2}[\/\\\-][0-9]{2}[\/\\\-][0-9]{4}$/';
            $re_theme = '/^[a-z]$/i';
            $re_ville = '/^[a-z-]$/i';

            if (!empty($recherche['date'])) {

                if (preg_match($re_date, $recherche['date'])) {

                    $recherche['date'] = ToolsController::convertDateUs($recherche['date']);
                    $results_search = $this->evenements->findDate($recherche['date']);
                    $nb_recherche = count($results_search);

                    if ($nb_recherche > 0) {
                        $this->show('affichage/recherche');
                    } else {
                        $this->redirectToRoute('recherche_msg', ['msg' => 'error_search']);
                    }

                } else {
                    $this->redirectToRoute('recherche_msg', ['msg' => 'error_date_1']);
                }
//                $info['debug'] = $nb_recherche;
//                $this->show('debug',$info);
            }

            else if (!empty($recherche['theme'])) {

                if (preg_match($re_theme, $recherche['theme'])) {

                    $results_search = $this->evenements->findTheme($recherche['theme']);
                    $nb_recherche = count($results_search);

                    if ($nb_recherche > 0) {
                        $this->show('affichage/recherche');
                    } else {
                        $this->redirectToRoute('recherche_msg', ['msg' => 'error_search']);
                    }

                } else {
                    $this->redirectToRoute('recherche_msg', ['msg' => 'error_theme_1']);
                }
            }

            else if (!empty($recherche['ville'])) {

                if (preg_match($re_ville, $recherche['ville'])) {

                    $results_search = $this->evenements->findCity($recherche['ville']);
                    $nb_recherche = count($results_search);

                    if ($nb_recherche > 0) {
                        $this->show('affichage/recherche');
                    } else {
                        $this->redirectToRoute('recherche_msg', ['msg' => 'error_search']);
                    }

                } else {
                    $this->redirectToRoute('recherche_msg', ['msg' => 'error_ville_1']);
                }
            }
        }

        $this->show('affichage/recherche');
    }

}