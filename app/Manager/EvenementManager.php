<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 15/04/2016
 * Time: 12:18
 */

namespace Manager;
use W\Manager\Manager;

class EvenementManager extends Manager
{
    /*
     * Requete des derniers evenements non réalisés :
     */

    public function showLastEvents(){
        $sql = "SELECT * FROM " . $this->table . " WHERE date_debut >= CURDATE() ORDER BY date_debut DESC LIMIT 0,10";
        $sth = $this->dbh->query($sql);
        return $sth->fetchAll();
    }


    /*
     * Requete pour trouver des evenements selon le theme voulu :
     */

    public function findTheme($theme){
        $sql = "SELECT * FROM " . $this->table . " WHERE theme = :cle AND date_debut >= CURDATE() ORDER BY date_debut DESC";

        $sth = $this->dbh->prepare($sql);
		$sth->bindValue(":cle", $theme);
		$sth->execute();

		return $sth->fetchAll();

    }


    /*
     * Requete pour trouver des evenements selon la date voulu :
     */

    public function findDate($date){
        $sql = "SELECT * FROM " . $this->table . " WHERE date_debut = :cle AND date_debut >= CURDATE() ORDER BY date_debut DESC";

        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":cle", $date);
        $sth->execute();

        return $sth->fetchAll();

    }


    /*
     * Requete pour trouver des evenements selon la ville voulu :
     */
    
    public function findCity($ville){
        $sql = "SELECT * FROM " . $this->table . " WHERE ville = :cle AND date_debut >= CURDATE() ORDER BY date_debut DESC";

        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":cle", $ville);
        $sth->execute();

        return $sth->fetchAll();

    }
}