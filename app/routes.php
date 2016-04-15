<?php
	
	$w_routes = array(
		['GET', '/', 'Base#afficherAccueil', 'accueil'],
		['GET', '/connexion', 'User#afficherConnexion', 'connexion'],
		['GET', '/creer_evenement', 'User#afficherCreerEvenement', 'creer_evenement'],
		['GET', '/inscription', 'User#afficherInscription', 'inscription'],
		['GET', '/modifier_profil', 'User#afficherModifierProfil', 'modifier_profil'],
		['GET', '/panier', 'User#afficherPanier', 'panier'],
		['GET', '/profil', 'User#afficherProfil', 'profil'],
		['GET', '/gestion_membre', 'Admin#afficherGestionMembre', 'gestion_membre'],
		['GET', '/derniers_evenements', 'Affichage#afficherDerniersEvenements', 'derniers_evenements'],
		['GET', '/evenement_description', 'Affichage#afficherEvenement', 'evenement_description'],
		['GET', '/recherche', 'Affichage#afficherRecherche', 'recherche']
	);