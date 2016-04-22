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
        $sql = 'UPDATE ' . $this->table . ' SET mot_de_passe="'.$mdp.'" WHERE email = :email';

        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(":email", $email);
        $sth->execute();

        return $sth->fetch();
    }
}