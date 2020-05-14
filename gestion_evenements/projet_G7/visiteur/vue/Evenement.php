<?php
require_once('../../visiteur/modele/classe/visiteur.evenement.class.php');
require_once('../../visiteur/modele/classe/commentaire.class.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="../../visiteur/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style/style.css">
    <link href="../../visiteur/style/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>PAGE ACCUEIL</title>
    <style>
        .active{
            color: orange;
        }
        ul li{
            font-size: 25px;
        }
        .trait_dessus{
            border-top: 2px solid blue;
            width: 1110px;
        }
    </style>
</head>
<body>
    <div class="container " style="margin-top: 30px;">
        <div class="row"  style=" box-shadow:  0 8px 15px rgba(85, 85, 85, 0.25);">
            <div class="col-md-5">
                <img src="../../visiteur/img/logo.png" alt="logo du site">
            </div>
            <div class="col-md-7">
               <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="accueil.html">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="evenement.php">Nos evenements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="presentation.html">Presentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
               </ul>
            </div>
        </div><br>
        </div><br>

        <div class="row">
            <div class="col-md-12">
                    <img class="mySlides" src="../../visiteur/img/image1.jpg" style="width:100%;">
                    <img class="mySlides" src="../../visiteur/img/image2.jpg" style="width:100%;">
                    <img class="mySlides" src="../../visiteur/img/image3.jpg" style="width:100%;">
                    <img class="mySlides" src="../../visiteur/img/image4.jpg" style="width:100%;">
                    <img class="mySlides" src="../../visiteur/img/image5.jpg" style="width:100%;">
                  
            </div>

            <div class="row ml-3">
              
        
        
          
            <div class="row col-md-12 ">
            <?php
          $Myliste= new Visiteur();
  foreach($Myliste->getAll() as $Myliste) {
   ?>
                <div class="col mt-2">
                    <div class="jumbotron border border-danger bg-light" style="text-align: center;">
                        <p class="lead">
                       <button class="btn btn-success"><h3><?php echo $Myliste['categorie'];?></h3></button>
                            </p>
                           <div class=" bg bg-warning"> <p  ><h4 ><?php echo $Myliste['description'];?></h4></p>
                              <p class=" bg bg-warning"><?php echo $Myliste['organisateur'];?></p>
                               <h4> Appartir du: <?php echo $Myliste['date_debut'];?></h4>
                              <h5> Au<?php echo $Myliste['date_debut'];?></h5>
                         </div>
               
                    </div>
                     <br>

       <?php  
     
      }
      ?>

        
        
        
        
        </div>
       
 <div class="container " >
          <h2>Les Commentaires</h2>
 </div>


 <?php
          $affiche_commentaire= new Commentaire();
  foreach($affiche_commentaire->getAll() as $affiche_commentaire) {
   ?> <div class="container" >
          <div class="row border mt-4" ><p><strong><h3>#<?php echo $affiche_commentaire['nom_visiteur'];?>:</h3></strong> <h4 class="mt-1" ><?php echo $affiche_commentaire['message'];?></h4> </p></div>
      </div>
       <?php  
     
      }
      ?>



 </div>
    
        <div class="trait_dessus"></div><br>
        <div class="row col-md-12">
            <div class="row col-md-7">
                <h4 style="color: blue;">Vous pouvez aussi nous laisser un commentaire :</h4>
                <br>
                <div class="row">
                    <form action="../../visiteur/controleur/controleur.commentaire.php" method="post" >
                        <label for="text" class="col-md-2">Nom</label>
                            <div class="col-md-12">
                  <input type="text" name="nom_visiteur" class="form-control" id="text">
                </div><br>
                <label for="email" class="col-md-2">Email</label>
                <div class="col-md-12">
                  <input type="email" name="email" class="form-control" id="mail">
                </div><br>
             
                <div>
                <label for="text" class="col-md-2 col-form-label">Message</label>
                        
                <div class="col-md-12">
                  <textarea name="message"  id="text" maxlength="200" cols="50"></textarea>
                </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-lg btn-primary">ENVOYER</button>
                        </div>
                        <div class="col">
                         <button type="reset" class="btn btn-lg btn-danger">ANNULER</button>
                         </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row col-md-5">
        <h4 style="color: blue;">Retrouvez-nous sur les réseaux sociaux:</h4>
            <div class="col-md-7">
                    <a href="#"><img src="../../visiteur/img/fac.png" alt=""></a><br><br><br><br>
                    <a href="#"><img src="../../visiteur/img/T.png" alt=""></a><br><br><br><br>
                    <a href="#"><img src="../../visiteur/img/go.jpg" alt=""></a>
            </div>
        </div>
    </div>
    
</div><br>
<div class="trait_dessus"></div><br><br>
<script src="../../visiteur/style/java/java.js"></script>
</body>
</html>