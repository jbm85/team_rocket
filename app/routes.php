<?php
	
	$w_routes = array(
		// si tu m'envoi l'accueil (pas de saisie d'url) en GET, je t'envoi vers BaseController dans la méthode afficherAccueil. Tu as nommé cette route "accueil"
		['GET', '/', 'Base#afficherAccueil', 'accueil'],
		['GET|POST', '/connexion', 'Membre#afficherConnexion', 'connexion'],
		['GET', '/creer_evenement', 'Membre#afficherCreerEvenement', 'creer_evenement'],

		['GET|POST', '/inscription', 'Membre#afficherInscription', 'inscription'],
		['GET', '/inscription/[:msg]', 'Membre#afficherInscriptionMsg', 'inscription_msg'],

		['GET', '/connexion/[:msg]', 'Membre#connexionMsg', 'connexionMsg'],

		['GET', '/modifier_profil', 'Membre#afficherModifierProfil', 'modifier_profil'],
		['GET', '/panier', 'Membre#afficherPanier', 'panier'],
		['GET', '/profil', 'Membre#afficherProfil', 'profil'],

		
		['GET', '/gestion_membre', 'Admin#afficherGestionMembre', 'gestion_membre'],
		['GET', '/derniers_evenements', 'Affichage#afficherDerniersEvenements', 'derniers_evenements'],
		['GET', '/evenement_description/[:id]', 'Affichage#afficherEvenement', 'evenement_description'],
		['GET', '/recherche', 'Affichage#afficherRecherche', 'recherche'],

		['GET', '/deconnexion', 'Membre#deconnexion', 'deconnexion']
	);