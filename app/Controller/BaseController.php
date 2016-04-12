<?php

namespace Controller;

use \W\Controller\Controller;

class BaseController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function afficherAccueil()
	{
		$this->show('base/accueil');
	}

}