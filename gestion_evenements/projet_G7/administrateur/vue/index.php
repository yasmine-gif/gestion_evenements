<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../administrateur/style/style.login.css">
    <title>GESTION EVENEMENTS</title>
</head>
<body>
    <div id="container">
        <!-- zone de connexion -->
        
        <form action="../controleur/authentification/controleur_verification_login.php" method="post">
            <h1>Connexion</h1>
            
            <label><b>Username</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN' >

           
        </form>
    </div>
</body>
</html>
