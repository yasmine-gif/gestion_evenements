<?php
require_once('../../../connexiondb/connexion.php');
require_once('../../../administrateur/modele/classe/controle.evenement.class.php');

class Administration{
    
    private $base;
    function __construct(){

        try {
            $this->base=new PDO('mysql:host=localhost;dbname=evenementiel','root','');
        } catch (PDOException $e){
            echo 'erreur:'.$e->getMessage();
        }

    }


                                            
public function new_admin($nom,$email,$password){  
                                              
    $ajout=$this->base->prepare("INSERT INTO administrateur(nom,email,password) VALUES(:nom,:email,:password)") ;
    $ajout->execute(array(
       "nom"  => $_POST['nom'],
       "email" => $_POST['email'],
       "password" =>sha1($_POST['password'])
    ));
}


}

?>