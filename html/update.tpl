<html>
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="PageUtilisateur.css" media="screen" type="text/css" />
</head>
<body>
    <div id="container">
        
        <form action="updatesign.php" method="POST">
            <h1> Modifier mes informations</h1>
            
            <label><b>Nom</b></label>
            <input type="text" placeholder="Entrer votre NOM" name="lastname" required>

            <label><b>Prénom</b></label>
            <input type="text" placeholder="Entrer votre PRENOM" name="firstname" required>
            
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>
            
            <label><b>Date de Naissance</b></label>
            <input type="date" placeholder="Entrer votre date de naissance" name="birthday" required>

            <input type="submit" id='submit' name='submit_update' value='Enregistrer' >
        </form>
    </div>
</body>
</html>