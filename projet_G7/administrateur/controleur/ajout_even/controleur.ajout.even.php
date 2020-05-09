<?php
require_once('../../../connexiondb/connexion.php');
require_once('../../../administrateur/modele/classe/controle.evenement.class.php');
$base;
 echo $_POST['categorie'],$_POST['description'],$_POST['organisateur'],$_POST['date_debut'],$_POST['date_fin'];
   
	 	 		 	 	 
$evenement= new Gestion_evenement();
if(isset($_POST)){
$evenement->enregistrer($_POST['categorie'],$_POST['description'],$_POST['organisateur'],$_POST['date_debut'],$_POST['date_fin']);

header('location:../../../administrateur/vue/admin.supprimer.evenement.php?rep=Evenement Enregistre avec succes'); 
}
?>