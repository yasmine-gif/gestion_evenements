<?php


 class Visiteur{

    private $base;
    function __construct(){

        try {
            $this->base=new PDO('mysql:host=localhost;dbname=evenementiel','root','');
        } catch (PDOException $e){
            echo 'erreur:'.$e->getMessage();
        }

    }



public function getAll(){
$enrg=$this->base->query("SELECT * FROM evenement");
return $enrg->fetchAll();
$enrg->closeCursor();
}

 }
