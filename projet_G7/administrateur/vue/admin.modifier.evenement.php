<?php
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
<div  class=" row justify-content-center "><h3>Administrion Evenements* MODIFIER *Evenements</h3></div>
</div>
     
<div class="container border mt-2" >


 
         <table class="table table-bordered  ">
         
           <thead class=" bg bg-success center  border ">
             <tr class="m-0" >
               <th scope="col">Categorie</th>
               <th scope="col">Description</th>
               <th scope="col">Organisateur</th>
               <th scope="col">Date debut</th>
               <th scope="col">Date fin</th>
               <th scope="col">modifier</th>
              
             </tr>
           </thead>
          
          <tbody>
        
         <tr>
             <td>Mariage</td>
             <td>Lorem ipsum dolor sit, amet consectetur adipisicing </td>
             <td> Nemo dicta, iusto laborum</td>
             <td>13/03/2020</td>
             <td>24/05/2020</td>
             <td>+Modifier</td>
             
       </tr>
       <tr>
             <td>Anniversaire</td>
             <td>Lorem ipsum dolor sit, amet consectetur adipisicing </td>
             <td> Nemo dicta, iusto laborum</td>
             <td>15/04/2020</td>
             <td>28/06/2020</td>
             <td>+Modifier</td>
       </tr>
       <tr>
             <td>Festival Garba</td>
             <td>Lorem ipsum dolor sit, amet consectetur adipisicing </td>
             <td> Nemo dicta, iusto laborum</td>
             <td>1/04/2021</td>
             <td>8/07/2021</td>
             <td>+Modifier</td>
       </tr>
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