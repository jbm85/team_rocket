<?php

namespace Controller;

use \W\Controller\Controller;
// j'appelle le manager qui contient les fonctions (methodes) de requete vers la table "evenements" dans la BDD
use Manager\EvenementManager;


class BaseController extends Controller
{
	protected $evenement;
	
	public function __construct()
	{
		// j'instancie EvenementManager() dès le lancement du construct (le lancement du construct se fait automatiquement par le framework)
		$this->evenement = new EvenementManager();
	}

	/**
	 * Page d'accueil par défaut
	 */

	public function afficherAccueil()
	{
		// je stock le resultat de SELECT * FROM evenements dans $infos['evenements']
		$infos['evenements'] = $this->evenement->showLastEvents();
		foreach($infos['evenements'] as $key => $value) {
			$infos['evenements'][$key]['date'] = ToolsController::dateEnFr($value['date_debut']);
		}


		// je transfert $infos au template. Et, du côté du template accueil.php, 'evenements' devient $evenements
		// je demande à afficher le template base/accueil.php, qui contient tout le html
		$this->show('base/accueil', $infos);
	}

}