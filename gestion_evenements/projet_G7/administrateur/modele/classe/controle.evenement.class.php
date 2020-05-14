<?php
         class Gestion_evenement{
            private $base;
            function __construct(){
        
                try {
                    $this->base=new PDO('mysql:host=localhost;dbname=evenementiel','root','');
                } catch (PDOException $e){
                    echo 'erreur:'.$e->getMessage();
                }
        
            }

    //enregistrer une nouvelle moto
    // id_marque 	modele 	cylindre 	categorie 	num_serie 	prix 


    public function enregistrer($categorie ,$description ,$organisateur ,$date_debut ,$date_fin  ){
        $ajout=$this->base->prepare("INSERT INTO evenement(categorie ,description ,organisateur ,date_debut ,date_fin ) VALUES(:categorie ,:description ,:organisateur ,:date_debut ,:date_fin )") ;
        $ajout->execute(array(
           "categorie"  => $_POST['categorie'],
           "description" => $_POST['description'],
           "organisateur" =>$_POST['organisateur'],
           "date_debut" =>$_POST['date_debut'],
            "date_fin"  =>$_POST['date_fin'] 
        ));
    }
     

 public function getAll(){
    $enrg=$this->base->query("SELECT * FROM evenement");
      return $enrg->fetchAll();
      $enrg->closeCursor();
}



 public function supprimer($id_evenement){
    $sup=$this->base->query ('DELETE  FROM evenement WHERE id_evenement=\'' . $id_evenement . '\'');
    return $sup;
    }

 

}


?>