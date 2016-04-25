<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 15/04/2016
 * Time: 12:18
 */

namespace Manager;
use W\Manager\UserManager;

class MembreManager extends UserManager
{
    public function envoiMdp($email, $mdp)
    {
        $sql = 'UPDATE ' . $this->table . ' SET mot_de_passe= :mdp WHERE email = :email';

        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":email", $email);
        $sth->bindValue(":mdp", $mdp);
        $sth->execute();

        return $sth->fetch();
    }

    public function modifPhotoProfil($photo_name, $id)
    {
        $sql = 'UPDATE ' . $this->table . ' SET photo_profil = :photo_name WHERE id = :id';

        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':photo_name', $photo_name);
        $sth->bindValue(':id', $id);
        $sth->execute();

    }

    public function insertPhotoEvenement($photo_name, $id, $i)
    {

        $sql = 'UPDATE evenements SET photo_'. $i .' = :photo_name WHERE id = :id';

        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':photo_name', $photo_name);
        $sth->bindValue(':id', $id);
        $sth->execute();


    }
}