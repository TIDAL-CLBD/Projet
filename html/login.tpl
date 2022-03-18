<html>
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="PageUtilisateur.css" media="screen" type="text/css" />
</head>
<body>
    <div id="container">
        
        <form action="login.php" method="POST">
            <h1>Connexion</h1>
            
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' name='submit_login' value='Connexion' >
        </form>
    </div>
</body>
</html>
