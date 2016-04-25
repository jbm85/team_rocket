<?php
	
	$w_routes = array(
		// si tu m'envoi l'accueil (pas de saisie d'url) en GET, je t'envoi vers BaseController dans la méthode afficherAccueil. Tu as nommé cette route "accueil"
		['GET', '/', 'Base#afficherAccueil', 'accueil'],

		['GET|POST', '/connexion', 'Membre#afficherConnexion', 'connexion'],

		['POST', '/connexion', 'Membre#mdpRecup', 'mdp_recup'],

		['GET|POST', '/deconnexion', 'Membre#deconnexionMembre', 'deconnexion'],

		['GET|POST', '/creer_evenement', 'Membre#afficherCreerEvenement', 'creer_evenement'],

		['GET|POST', '/inscription', 'Membre#afficherInscription', 'inscription'],

		['GET|POST', '/modifier_profil', 'Membre#afficherModifierProfil', 'modifier_profil'],

		['GET|POST', '/profil', 'Membre#afficherProfil', 'profil'],

		['GET', '/panier', 'Membre#afficherPanier', 'panier'],

		['GET|POST', '/gestion_membre', 'Membre#afficherGestionMembre', 'gestion_membre'],
		['GET|POST', '/gestion_membre/[:id]', 'Membre#supprimeGestionMembre', 'gestion_membre_id'],

		['GET', '/derniers_evenements', 'Affichage#afficherDerniersEvenements', 'derniers_evenements'],

		['GET', '/evenement_description/[:id]', 'Affichage#afficherEvenement', 'evenement_description'],
		
		['GET|POST', '/recherche', 'Affichage#afficherRecherche', 'recherche']

	);