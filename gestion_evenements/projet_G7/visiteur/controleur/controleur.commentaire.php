<?php
require_once('../../connexiondb/connexion.php');
require_once('../../visiteur/modele/classe/commentaire.class.php');
	 

$base;	 		 	 	 
$commenter= new Commentaire();
if(isset($_POST)){
$commenter->new_commentaire($_POST['email'],$_POST['nom_visiteur'],$_POST['message']);

header('location:../../visiteur/vue/Evenement.php?rep=nouveau commentaire'); 
}

 
