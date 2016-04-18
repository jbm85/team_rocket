<?php

namespace Controller;

use \W\Controller\Controller;

use Manager\EvenementManager;

class BaseController extends Controller
{
	protected $evenement;

	/**
	 * Page d'accueil par défaut
	 */

	public function __construct(){
		$this->evenement = new EvenementManager();
	}
	public function afficherAccueil()
	{
		$infos['evenements'] = $this->evenement->findAll();
		$this->show('base/accueil', $infos);
	}

}