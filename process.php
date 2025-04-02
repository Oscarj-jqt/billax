<?php

class Database
{
   private $host = "mysql:dbname=crud_ajax";
   private $user = "root";
   private $pswd = "";

   private function getconnexion()
   {
       try {
           return new PDO($this->host, $this->user, $this->pswd);
       } catch (PDOException $e) {
           die('Erreur dans la tentative de connexion à la base de donnée:' . $e->getMessage());
       }
   }


}