<?php
require_once('../../visiteur/modele/classe/visiteur.evenement.class.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<tr>
   <div class="row">
   <?php
          $Myliste= new Visiteur();
  foreach($Myliste->getAll() as $Myliste) {
   ?>
            <div class="row col-md-12">
                <div class="col">
                    <div class="jumbotron" style="text-align: center;">
                        <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button"><h4><?php echo $Myliste['categorie'];?></h4></a>
                            </p>
                            <p><h4><?php echo $Myliste['description'];?></h4></p>
                            <p><?php echo $Myliste['organisateur'];?></p>
                            <h4><?php echo $Myliste['date_debut'];?></h4>
                            <h4><?php echo $Myliste['date_debut'];?></h4>
                    <img src="../../vi,siteur/img/jpg" alt="" >,,
                    </div>
                     <br>

       <?php  
     
      }
      ?>

      
</div>
</body>
</html>



