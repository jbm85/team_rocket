<?php

namespace Controller;
use W\Controller\Controller;

class ToolsController extends Controller
{
    /*
     * Conversion du format anglais de la date et heure (BDD MySQL) en format francais :
     */

    public static function dateHeureEnFr($date)
    {
        $formatage = new \DateTime($date);
        $formatage = $formatage->format('d/m/Y H:i');
        return $formatage;
    }


    /*
     * Conversion du format anglais de la date (BDD MySQL) en format francais :
     */

    public static function dateEnFr($date)
    {
        $formatage = new \DateTime($date);
        $formatage = $formatage->format('d/m/Y');
        return $formatage;
    }


    /*
     * Récupérer les posts en dynamique
     */

    public static function remplirLesPosts(array $posts)
    {
        $utilisateur = array();
        foreach ($posts as $key => $value) {
            if ($key !== 'envoi-inscription' && $key !== 'envoi-connexion' && $key !== 'photo_profil' && $key !== 'envoi-recherche' && $key !== 'creer-evenement' && $key !== 'photo_1' && $key !== 'photo_2' && $key !== 'photo_3'){
                if ($key == 'nom' || $key == 'prenom' || $key == 'titre' || $key == 'theme' || $key == 'public' || $key == 'descriptif' || $key == 'adresse' || $key == 'ville'){
                    $utilisateur[$key] = !empty($value) ? strip_tags(trim(ucfirst($value))) : '';
                } else {
                    $utilisateur[$key] = !empty($value) ? strip_tags(trim($value)) : '';
                }
            }
                
        }
        return $utilisateur; // on renvoi un tableau qui contient les posts sinon on renvoi un tableau vide
    }


    /*
     * Fonction pour convertir la date au format francais en date anglaise(BDD MySQL) :
     */

    public static function convertDateUs($date_fr)
    {
        if (preg_match('/\//', $date_fr)) {
            $date = explode('/', $date_fr);
            $date_us = $date[2] . '-' . $date[1] . '-' . $date[0];
            return $date_us;
        } else if (preg_match('/-/', $date_fr)) {
            $date = explode('-', $date_fr);
            $date_us = $date[2] . '-' . $date[1] . '-' . $date[0];
            return $date_us;
        }
        return false;
    }

    public static function checkExtensionPhoto() {
	//debug($_FILES['photo']['name']);
	$extension = strRchr($_FILES['photo']['name'], '.'); // cette fonction trouve le dernier caractère indiqué et donne la chaine de caractère qui reste, à partir de celui-ci
	//debug($extension); // .jpeg, .png
	$extension = strToLower($extension); // passage en minuscule
	$extension = subStr($extension, 1); // tu me donne le jpg sans le point
	$extensions_valides = ['jpg', 'jpeg', 'png', 'gif']; // je créé un tableau qui contient toutes les extensions valides
	//debug($extension); // jpg etc...
	//debug($extensions_valides);
	$verif_extension = in_array($extension, $extensions_valides); // cette fonction trouve ce qu'on lui donne en 1er argument dans ce qu'on lui donne en 2eme argument
	return $verif_extension; // si y'a autre chose que les extensions du tableau, il retournera false, sinon il retournera true
}

}