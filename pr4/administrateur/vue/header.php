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


  <div class="container-fluid borde mb-5 marge3 box2" >
  <div class="row bg bg-light" >
              <div class=" col-md-4 " ><img src="../img/logo1.png" alt="" class="taille_logo" ></div>
              
              <div class="col-md-6 mt-4" >
                  
              <h2>Evenemento Administrator</h2> Administrateur: Yasmine <br> Email:YasmineSimplon@gmail.com </div>        
              <div class="col-md-2" > <a href=""><img src="../img/deconnect.png" alt=""> <br> Deconnexion</a> <br>
              <?php       
           
            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            echo strftime('%A %d %B %Y '). '<br>';
            echo gmdate(' h:i:s'). '<br>';
            date_default_timezone_set('Europe/Moscow');//Moscou = GMT+3
        ?></div>
         </div>

  </div>
    
</body>
</html>