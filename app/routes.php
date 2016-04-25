<?php
	
	$w_routes = array(
		// si tu m'envoi l'accueil (pas de saisie d'url) en GET, je t'envoi vers BaseController dans la méthode afficherAccueil. Tu as nommé cette route "accueil"
		['GET', '/', 'Base#afficherAccueil', 'accueil'],

		['GET|POST', '/connexion', 'Membre#afficherConnexion', 'connexion'],

		['POST', '/connexion', 'Membre#mdpRecup', 'mdp_recup'],

		['GET|POST', '/deconnexion', 'Membre#deconnexionMembre', 'deconnexion'],

		['GET|POST', '/creer_evenement', 'Membre#afficherCreerEvenement', 'creer_evenement'],
		['GET', '/creer_evenement[:msg]', 'Membre#afficherCreerEvenementMsg', 'creer_evenement_msg'],

		['GET|POST', '/inscription', 'Membre#afficherInscription', 'inscription'],
		['GET', '/inscription/[:msg]', 'Membre#afficherInscriptionMsg', 'inscription_msg'],

		['GET', '/connexion/[:msg]', 'Membre#connexionMsg', 'connexionMsg'],

		['GET|POST', '/modifier_profil', 'Membre#afficherModifierProfil', 'modifier_profil'],

		['GET|POST', '/modifier_profil/[:msg]', 'Membre#modifProfilMsgError', 'modifier_profil_msg'],

		['GET|POST', '/profil', 'Membre#afficherProfil', 'profil'],

		['GET', '/panier', 'Membre#afficherPanier', 'panier'],

		['GET', '/gestion_membre', 'Admin#afficherGestionMembre', 'gestion_membre'],

		['GET', '/derniers_evenements', 'Affichage#afficherDerniersEvenements', 'derniers_evenements'],

		['GET', '/evenement_description/[:id]', 'Affichage#afficherEvenement', 'evenement_description'],

		['GET|POST', '/recherche', 'Affichage#afficherRecherche', 'recherche'],
		['GET', '/recherche/[:msg]', 'Affichage#searchMsgError', 'recherche_msg']

	);