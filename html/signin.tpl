<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
        <link rel="stylesheet" href="PageUtilisateur.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            
            <form action="signin.php" method="POST">
                <h1>Mes informations</h1>
                
                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer votre NOM" name="lastname" required>

                <label><b>Prénom</b></label>
                <input type="text" placeholder="Entrer votre PRENOM" name="firstname" required>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                
                <label><b>Date de Naissance</b></label>
                <input type="date" placeholder="Entrer votre date de naissance" name="birthday" required>

                <input type="submit" id='submit' name='submit_signin' value='Enregistrer' >

			</form>
        </div>
    </body>
</html>
