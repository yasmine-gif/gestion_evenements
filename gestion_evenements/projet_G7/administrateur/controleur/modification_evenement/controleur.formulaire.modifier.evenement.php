<?php


require_once('../../../connexiondb/connexion.php');
require_once('../../../administrateur/modele/classe/controle.evenement.class.php');
$base;
$id_evenement=$_GET['modifie'];
 echo $_POST['categorie'],$_POST['description'],$_POST['organisateur'],$_POST['date_debut'],$_POST['date_fin'];
   
	 	 		 	 	 
$evenement= new Gestion_evenement();
if(isset($_POST)){
$evenement->modifier($id_evenement,$_POST['categorie'],$_POST['description'],$_POST['organisateur'],$_POST['date_debut'],$_POST['date_fin']);
}
header('location:../../vue/admin.formulaire.Modifier.evenement.php');

 ?>