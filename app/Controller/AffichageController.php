<?php

namespace Controller;

use \W\Controller\Controller;

use Manager\EvenementManager;

class AffichageController extends Controller
{
    protected $evenements;

    public function __construct()
    {
        $this->evenements = new EvenementManager();
    }

    public function afficherDerniersEvenements()
    {

        $infos['derniers_evenements'] = $this->evenements->findAll('date_debut', 'DESC', 10, 0);
        $this->show('affichage/derniers_evenements', $infos);
    }

    public function afficherEvenement($id)
    {
        $infos['details_evenement'] = $this->evenements->find($id);
        $this->show('affichage/evenement_description', $infos);
    }

    public function afficherRecherche() //TODO : Faire un count des recherches trouvées et afficher en dynamique
    {
        if (isset($_POST['envoi-recherche'])){
            $recherche = ToolsController::remplirLesPosts($_POST);

            if (!empty($recherche['date'])){
                $recherche['date'] = ToolsController::convertDateUs($recherche['date']);
                $results_date = $this->evenements->findDate($recherche['date']);

                $info['debug'] = $results_date;
                $this->show('debug',$info);
            }

            else if (!empty($recherche['theme'])){
                $results_theme = $this->evenements->findTheme($recherche['theme']);

                $info['debug'] = $results_theme;
                $this->show('debug',$info);
            }

            else if (!empty($recherche['ville'])){
                $results_ville = $this->evenements->findCity($recherche['ville']);

                $info['debug'] = $results_ville;
                $this->show('debug',$info);
            }
        }
        $this->show('affichage/recherche');
    }

}