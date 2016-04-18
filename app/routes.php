<?php
	
	$w_routes = array(
		['GET', '/', 'Base#afficherAccueil', 'accueil'],
		['GET', '/connexion', 'Membre#afficherConnexion', 'connexion'],
		['GET', '/creer_evenement', 'Membre#afficherCreerEvenement', 'creer_evenement'],
		['GET|POST', '/inscription', 'Membre#afficherInscription', 'inscription'],
		['GET', '/inscription/[:msg]', 'Membre#afficherInscriptionMsg', 'inscription_msg'],
		['GET', '/modifier_profil', 'Membre#afficherModifierProfil', 'modifier_profil'],
		['GET', '/panier', 'Membre#afficherPanier', 'panier'],
		['GET|POST', '/profil', 'Membre#afficherProfil', 'profil'],

		
		['GET', '/gestion_membre', 'Admin#afficherGestionMembre', 'gestion_membre'],
		['GET', '/derniers_evenements', 'Affichage#afficherDerniersEvenements', 'derniers_evenements'],
		['GET', '/evenement_description', 'Affichage#afficherEvenement', 'evenement_description'],
		['GET', '/recherche', 'Affichage#afficherRecherche', 'recherche']
	);