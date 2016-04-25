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
     * Recherche d'un évènement :
     */

    public function afficherRecherche()
    {
        if (isset($_POST['envoi-recherche'])) {

            $recherche = ToolsController::remplirLesPosts($_POST);

            $re_date = '/^[0-9]{2}[\/\\\-][0-9]{2}[\/\\\-][0-9]{4}$/';
            //$re_theme = '/^[a-z]$/i'; // TODO : Check les regex
            //$re_ville = '/^[a-z-]$/i';

            if (!empty($recherche['date'])) {

                if (preg_match($re_date, $recherche['date'])) {

                    $recherche['date'] = ToolsController::convertDateUs($recherche['date']);
                    $infos['search_results'] = $this->evenements->findDate($recherche['date']);
                    $nb_recherche = count($infos['search_results']);

                    if ($nb_recherche > 0) {
                        foreach ($infos['search_results'] as $key => $value):
                            $infos['search_results'][$key]['date'] = ToolsController::dateEnFr($value['date_debut']);
                        endforeach;
                        $this->show('affichage/recherche', $infos);
                    } else {
                        $this->show('affichage/recherche', ['msg' =>'Désolé aucune recherche ne correspond à votre demande.']);
                    }

                } else {
                    $this->show('affichage/recherche', ['msg' =>'Le format de la date entrée n\'est pas conforme.']);
                }

            }

            else if (!empty($recherche['theme'])) {

                //if (preg_match($re_theme, $recherche['theme'])) { //TODO : A Voir si le temps

                    $infos['search_results'] = $this->evenements->findTheme($recherche['theme']);
                    $nb_recherche = count($infos['search_results']);
                    //$info['debug'] = $infos['search_results'];
                    //$this->show('debug',$info);
                    if ($nb_recherche > 0) {
                        foreach ($infos['search_results'] as $key => $value):
                            $infos['search_results'][$key]['date'] = ToolsController::dateEnFr($value['date_debut']);
                        endforeach;
                        $this->show('affichage/recherche', $infos);
                    } else {
                        $this->show('affichage/recherche', ['msg' =>'Désolé aucune recherche ne correspond à votre demande.']);
                    }

                /*} else {
                    $this->redirectToRoute('recherche_msg', ['msg' => 'error_theme_1']);
                }*/
            }

            else if (!empty($recherche['ville'])) {

                //if (preg_match($re_theme, $recherche['ville'])) { //TODO : A voir si le temps

                    $infos['search_results'] = $this->evenements->findCity($recherche['ville']);
                    $nb_recherche = count($infos['search_results']);
                    //$info['debug'] = $results_search;
                    //$this->show('debug',$info);
                    if ($nb_recherche > 0) {
                        foreach ($infos['search_results'] as $key => $value):
                            $infos['search_results'][$key]['date'] = ToolsController::dateEnFr($value['date_debut']);
                        endforeach;
                        $this->show('affichage/recherche', $infos);
                    } else {
                        $this->show('affichage/recherche', ['msg' =>'Désolé aucune recherche ne correspond à votre demande.']);
                    }

                /*} else {
                    $this->redirectToRoute('recherche_msg', ['msg' => 'error_ville_1']);
                }*/
            }
        }

        $this->show('affichage/recherche');
    }

}