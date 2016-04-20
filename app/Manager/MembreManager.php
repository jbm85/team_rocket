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
    public function insertNotPassword(array $data, $stripTags = true)
    {

        $colNames = array_keys($data);
        $colNamesString = implode(", ", $colNames);

        $sql = "INSERT INTO " . $this->table . " ($colNamesString) VALUES (";
        foreach($data as $key => $value){
            if ($key !== 'password_confirm'){
                $sql .= ":$key, ";
            }
        }
        $sql = substr($sql, 0, -2);
        $sql .= ")";

        $sth = $this->dbh->prepare($sql);
        foreach($data as $key => $value){
            $value = ($stripTags) ? strip_tags($value) : $value;
            $sth->bindValue(":".$key, $value);
        }

        if (!$sth->execute()){
            return false;
        }
        return $this->find($this->lastInsertId());
    }
}