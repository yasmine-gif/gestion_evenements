<?php
require_once('../../connexiondb/connexion.php');
require_once('../../administrateur/modele/classe/controle.evenement.class.php');

class Commentaire{
    
    private $base;
    function __construct(){

        try {
            $this->base=new PDO('mysql:host=localhost;dbname=evenementiel','root','');
        } catch (PDOException $e){
            echo 'erreur:'.$e->getMessage();
        }

    }
	

                                            
  public function new_commentaire($email,$nom_visiteur,$message){  
                                              
    $commente=$this->base->prepare("INSERT INTO  commentaire(email,nom_visiteur,message) VALUES(:email,:nom_visiteur,:message)") ;
    $commente->execute(array(
       "email"  => $_POST['email'],
       "nom_visiteur" => $_POST['nom_visiteur'],
       "message" =>$_POST['message']
    ));
  }


//   public function affiche_comment(){
//     $affiche=$this->base->prepare('SELECT * INTO commentaire);
//     return $affiche->fetchAll();
//   }


public function getAll(){
    $affiche=$this->base->query("SELECT * FROM commentaire");
      return $affiche->fetchAll();
      $affiche->closeCursor();
}

}
?>  