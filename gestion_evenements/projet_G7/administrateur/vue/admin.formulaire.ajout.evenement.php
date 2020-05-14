<body>
   <div> <?php
    require_once('../vue/header.php');
    ?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/font-awesome-4.7.0/css/font-awesome.min.css">
 
 <link rel="stylesheet" a href="../style/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" a href="../style/style_ajout_evenement.css">
    <title>Ajout Evenement</title>
</head>

<div class="container "><div class="row  " >
      <div class=" col-md-6"></div>
      <button type="button" class="btn btn-warning"><a href="../vue/index1.php">Accueil</a></button>

   </div>      
<div  class=" row justify-content-center "><h3>Administrion Evenements*Ajouter*Evenements</h3></div>
</div>
<div class=" container center ml-2" >
   
       <div class="col-md-4 bg-light mt-4 box1 ml-2" > 
           <form action="../../administrateur/controleur/ajout_even/controleur.ajout.even.php" method="post" class="box ml-5">
              <h5> <p>Categorie</p></h5>
             <div>  <input type="text" class="border border-dark" name="categorie" >
             <small id="emailHelp" class="form-text text-muted">Definire le type d'evenement.exemple: Mariage, Anniversaire, Ceremonie</small>
            </div>
            <h5> <p>Description</p></h5>
             <div> <textarea name="description" id="" cols="30" rows="3" class="box1"></textarea>
             <small id="emailHelp" class="form-text text-muted">toute information sur l'evenement.</small>
            </div>

            <h5> <p>Organisateurs</p></h5>
             <div>  <input type="text" name="organisateur" >
             <small  id="emailHelp" class="form-text text-muted">Organisateur, partenare,chef....</small>
            </div>

            <h5> <p> Debut d'Evenement</p></h5>
             <div>  <input type="date" name="date_debut" >
             <small id="emailHelp" class="form-text text-muted">c'est prevue pour quant ?.</small>
            </div>

            <h5> <p> Fin de l'Evenement</p></h5>
             <div>  <input type="date" name="date_fin" >
             <small id="emailHelp" class="form-text text-muted">prend fin le ...</small>
            </div>
            <div>
                <input type="submit" value="Enregistre">
            </div>
           </form>
  </div>
   </div>

</div >
<div class="footer" >
    <?php
require_once('../vue/footer.admin.php')
?>
</div>

</body>
</html>