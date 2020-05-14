
<?php
require_once('../../../connexiondb/connexion.php');
require_once('../../../administrateur/modele/classe/even.administrateur.classe.php');
// echo $_POST['categorie'],$_POST['description'],$_POST['organisateur'],$_POST['date_debut'],$_POST['date_fin'];

	 	 		 	 	 
$Administrateur= new Administration();
if(isset($_POST['nom'],$_POST['email'],$_POST['password'],$_POST['pass']) AND ($_POST['password']==$_POST['pass']) ){
    $password= sha1($_POST['password']);
$Administrateur-> new_admin($_POST['nom'],$_POST['email'], $password);

// header('location:../../../administrateur/vue/admin.supprimer.evenement.php?rep=Evenement Enregistre avec succes'); 
}
else{
    echo'LES MOTS DE PASSE NE SONT PAS IDENTIQUE';
    echo'<a href="../../../administrateur/vue/ajout_admin.php">reesayer</a>';
}
?>