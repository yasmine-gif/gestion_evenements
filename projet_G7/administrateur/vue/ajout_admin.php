 <?php
require_once('../vue/header.php');
?>
<!DOCTYPE html>
<html>
<head>
 <title> AJOUTER Administrateur</title>
 <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/font-awesome-4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" a href="../style/style.css">
 <link rel="stylesheet" a href="../style/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div>
        <button class="btn-retour" >  <a href="../vue/index.php"> retour</a>  </button>
    </div>
    <div class="titre" > <h1>Parametre Ajout Administrateur</h1> </div>
 <div class="container">
 <img src="../img/admin2.png"/>
 <form   action="" method="post" >
 <div class="form-input">
 <input type="text" name="nom" placeholder="+Nom"/> 
 </div>
 <div class="form-input">
 <input type="email" name="role" placeholder="Email"/> 
 </div>
 <div class="form-input">
 <input type="text" name="pass" placeholder="Definir un Mot_passe" require  /> 
 </div>
 <div class="form-input">
 <input type="text" name="password" placeholder="repeter Mot de passe " require />
 </div>
 <input type="submit" type="submit" value="Ajouter" class="btn-login"/>
 </form>
 </div>
 <div class="mt-5"  >
 <?php
require_once('../vue/footer.admin.php');
?>
 </div>
</body>

</html>
