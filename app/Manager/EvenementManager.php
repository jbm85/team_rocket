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
    public function findTheme($theme){
        $sql = "SELECT * FROM ". $this->table ." WHERE  theme = :cle ORDER BY date_debut DESC";

        $sth = $this->dbh->prepare($sql);
		$sth->bindValue(":cle", $theme);
		$sth->execute();

		return $sth->fetch();

    }

    public function findDate($date){
        $sql = "SELECT * FROM ". $this->table ." WHERE  date_debut = :cle ORDER BY date_debut DESC";

        $sth = $this->dbh->prepare($sql);
		$sth->bindValue(":cle", $date);
		$sth->execute();

		return $sth->fetch();

    }

    public function findCity($city){
        $sql = "SELECT * FROM ". $this->table ." WHERE  ville = :cle ORDER BY date_debut DESC";

        $sth = $this->dbh->prepare($sql);
		$sth->bindValue(":cle", $city);
		$sth->execute();

		return $sth->fetch();

    }
}