<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/style_accueil.css">
    <title>Adimin Accueil</title>
</head>
<body>


  <div class="container-fluid borde mb-5 marge3" >
  <div class="row bg bg-light" >
              <div class=" col-md-4 " ><img src="../img/logo1.png" alt="" class="taille_logo" ></div>
              
              <div class="col-md-6 mt-4" >
                  
              <h2>Evenemento Administrator</h2> Administrateur: Yasmine <br> Email:YasmineSimplon@gmail.com </div>        
              <div class="col-md-2" > <a href="../../administrateur/vue/index.php"><img src="../img/deconnect.png" alt=""> <br> Deconnexion</a> <br>
              <?php       
           
            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            echo strftime('%A %d %B %Y '). '<br>';
            echo gmdate(' h:i:s'). '<br>';
            date_default_timezone_set('Europe/Moscow');//Moscou = GMT+3
        ?></div>
         </div>

  </div>

    <div class="container" >
        
<div class="row border border-dark   justify-content-md-between pt-3 justify  mt-5 mb-5 mt-5  box2 marge" >
             
        <div class="col " ><div class="box  card text-white bg-warning mb-3" style="max-width: 18rem;">
             <div class="card-header ">Nombre d'Evenements en court</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
       </div>  
      

       <div class="col" ><div class="box1 card text-white bg-danger mb-3" style="max-width: 18rem;">
       <div class="card-header">Nombre d'Amdinistrateur     </div>
          <div class="card-body">
              <h5 class="card-title">Primary card title</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>
    </div> 
     <div class="col" ><div class="box card text-white bg-success mb-3" style="max-width: 18rem;">
             <div class="card-header"><a href="../vue/ajout_admin.php"><h5>Ajouter un Administrateur</h5></a> </div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
       </div> 
</div>



         <div class="   row mt-3 p-2" >
    
              <div class="  evenement col-md border border-dark bg bg-light mr-1 "  >
                  <img src="../../administrateur/img/fete1.png" alt="">
                  <a href="../../administrateur/vue/admin.formulaire.ajout.evenement.php">Ajouter un Evenement</a>
             
            </div>
           
              <div class="col-md border border-danger mt-1  mr-1 box decalage" ><a href="../vue/admin.liste.evenement.php"><img src="../img/liste.png" alt=""> liste Evenements</a></div>
              <div class="col-md border border-dark mr-1 bg bg-light" ><a href="../vue/admin.modifier.evenement.php"><img src="../img/modifier.png" alt=""> modifier Evenements</a></div>
              <div class="col-md border border-danger mt-1 box decalage" ><a href="../vue/admin.supprimer.evenement.php"><img src="../img/supprimer.png" alt="">  supprimer Evenements</a></div>
         </div>

         <div class="row marge2 " >
              <div class=" mt-4 border " > <a href="../..//visiteur/vue/accueil.html"><img src="img/globe.png" alt="">  Voir en tant que visiteur</a></div>

         
         </div>
   
    </div>
    <div class=container-fluid  >

    <div class="row bg bg-dark copy_text justify-content-center  pt-2" ><img src="img/copyr.png" alt="">Copyright ©EVENEMENTO • Tous droits reservés</div>

    </div>
</body>
</html>