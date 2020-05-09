<?php
// require_once('../../connexiondb/connexion.php');
require_once('../../administrateur/modele/classe/controle.evenement.class.php');
$base;




    require_once('../vue/header.php');
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.liste.css">
    <title>Document</title>

</head>
<body>
     
<div class="container border" >

       <h2 class="text-center  " >Les evenements en cours!</h2>
 
         <table class="table table-bordered  ">
         
           <thead class=" bg bg-primary center  border ">
             <tr class="m-0" >
               <th scope="col">Categorie</th>
               <th scope="col">Description</th>
               <th scope="col">Organisateur</th>
               <th scope="col">Date debut</th>
               <th scope="col">Date fin</th>
              
             </tr>
           </thead>
          
          <tbody>
          <tr>   <?php
          $Myliste= new Gestion_evenement();
  foreach($Myliste->getAll() as $Myliste) {
   ?> <tr>
      <td scope="row" style="font-size:20px;"><?php echo $Myliste['categorie'];?></td>
      <td scope="row" style="font-size:20px;"><?php echo $Myliste['description'];?></td>
      <td scope="row" style="font-size:20px;"><?php echo $Myliste['organisateur'];?></td>
      <td scope="row" style="font-size:20px;"><?php echo $Myliste['date_debut'];?></td>
      <td scope="row" style="font-size:20px;"><?php echo $Myliste['date_fin'];?></td>
      
       </tr>

       <?php  
     
      }
      ?>
          </tbody>
         </table>
         <div class="container-fluid   " >
   <div class="row  " >
      <div class=" col-md-6  "  ><button type="button" class="btn btn-light border  "><a href="">Imprimer</a></button></div>
      <button type="button" class="btn btn-warning"><a href="../vue/index.php">Accueil</a></button>

   </div>            
</div>  
    </div>  
    

  
    
    <div class="mt-5  footer">

    </div>        
 <?php
require_once('../vue/footer.admin.php');
?>



</body>
</html>