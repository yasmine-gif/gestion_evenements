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
      <button type="button" class="btn btn-warning"><a href="../vue/index.php">Accueil</a></button>

   </div>      
<div  class=" row justify-content-center "><h3>Administrion Evenements*Ajouter*Evenements</h3></div>
</div>
<div class=" container " >
   
   <div class=" row ">
       <div class="col-md-6 imgf" ><div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="../img/mariage.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/slide1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div> 
<div   >
    <p><h4>Pensser du jours</h4></p>
<p>Sourire à la vie, sourire aux autres, sourire aux événements, c'est faire sourire son propre destin.</p>  

<p>"Il me semble que le meilleur parti à prendre dans ce monde est de ne rien désirer, de ne rien demander, de ne rien vouloir et de laisser cheminer les événements. Avec tout cela, on peut être malheureux, mais on n'est pas le complice de son malheur. "
Citation de Victor Cherbuliez ; Le fiancé de Mademoiselle Saint-Maur (1876)</p>

</div>
</div>

       <div class="col-md-6 bg-light mt-4 box1 " > 
           <form action="" class="box">
              <h5> <p>Categorie</p></h5>
             <div>  <input type="text" class="border border-dark">
             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <h5> <p>Description</p></h5>
             <div> <textarea name="" id="" cols="30" rows="3" class="box1"></textarea>
             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <h5> <p>Organisateurs</p></h5>
             <div>  <input type="text">
             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <h5> <p> Debut d'Evenement</p></h5>
             <div>  <input type="date">
             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <h5> <p> Fin de l'Evenement</p></h5>
             <div>  <input type="date">
             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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