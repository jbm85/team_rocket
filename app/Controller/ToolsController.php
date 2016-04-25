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
     * @param : tableau $_POST
     * @result : si correspondance renvoi un tableau avec des clés correspondants aux champs des formulaires ainsi que leur valeur sauf pour les champs de type 'submit' sinnon renvoi un tableau vide
     */

    public static function remplirLesPosts(array $posts)
    {
        $utilisateur = array();
        foreach ($posts as $key => $value) {
            if ($key !== 'envoi-inscription' && $key !== 'envoi-connexion' && $key !== 'photo_profil' && $key !== 'envoi-recherche' && $key !== 'creer-evenement' && $key !== 'photo_1' && $key !== 'photo_2' && $key !== 'photo_3' && $key !== 'sauvegarder'){
                if ($key == 'nom' || $key == 'prenom' || $key == 'titre' || $key == 'theme' || $key == 'public' || $key == 'descriptif' || $key == 'adresse' || $key == 'ville'){
                    $utilisateur[$key] = !empty($value) ? strip_tags(trim(ucfirst($value))) : '';
                } else {
                    $utilisateur[$key] = !empty($value) ? strip_tags(trim($value)) : '';
                }
            }
                
        }
        return $utilisateur;
    }


    /*
     * Fonction pour convertir la date au format francais en date anglaise(BDD MySQL) :
     * @param : date en français sous les formats suivants : DD/MM/YYYY ou DD-MM-YYYY
     * @result : si correspondance renvoie la date en format americain : YYYY-MM-DD sinon renvoi 'false'
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


    /*
     * Fonction pour valider l'extension des images à insérer en BDD (MySQL) :
     * @param : string, nom complet de l'image
     * @result : true si correspondance
     */

    public static function checkExtensionImg($img)
    {

        $extension = strRchr($img, '.');
        $extension = strToLower($extension);
        $extension = subStr($extension, 1);
        $extensions_valides = ['jpg', 'jpeg', 'png', 'gif'];
        $verif_extension = in_array($extension, $extensions_valides);
        return $verif_extension;
    }

}