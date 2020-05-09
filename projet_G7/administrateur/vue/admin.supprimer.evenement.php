<?php
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
<div class="container box  "><div class="row  " >
      <div class=" col-md-6"></div>
      <button type="button" class="btn btn-warning"><a href="../vue/index.php">Accueil</a></button>

   </div>      
<div  class=" row justify-content-center "><h3>Administrion Evenements ** SUPPRIMER ** Evenements</h3></div>
</div>
     
<div class="container border mt-2" >


 
         <table class="table table-bordered  ">
         
           <thead class=" bg bg-danger center  border ">
             <tr class="m-0" >
               <th scope="col">Categorie</th>
               <th scope="col">Description</th>
               <!-- <th scope="col">Organisateur</th>
               <th scope="col">Date debut</th> -->
               
               <th scope="col">SUPPRIMER</th>
              
             </tr>
           </thead>
          
          <tbody>
        
         <tr>
         <tr>   <?php
         $Myliste= new Gestion_evenement();
 foreach($Myliste->getAll() as $Myliste) {
  ?> <tr>
     <td scope="row" style="font-size:20px;"><?php echo $Myliste['categorie'];?></td>
     <td scope="row" style="font-size:20px;"><?php echo $Myliste['description'];?></td>


     <td><button class="btn btn-danger"><a href="../../administrateur/controleur/suppression_evenement/modele.supprimer.php?efface=<?php echo $Myliste['id_evenement']; ?>">supprimer</a></button></td>
     
             
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