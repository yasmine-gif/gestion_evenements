<?php
require_once('../../../administrateur/modele/classe/controle.evenement.class.php');

$Evenement =new Gestion_evenement();

if(isset($_GET['efface']))
{
    $Evenement->supprimer($_GET['efface']);
}
header('location:../../../administrateur/vue/admin.supprimer.evenement.php');
?>
