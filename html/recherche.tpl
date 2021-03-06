<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/recherche.css">
    <script src="../js/recherche.js"></script>
    <script src="../js/Toggle_Filtres.js"></script>
    <script src="../js/Filtre_recherche.js"></script>
    <title>Recherche</title>
</head>

<body class="wrapper">

    <div class="header">
        <h1 > Acupunctoi </h1>
        <a href="../php/index.php">Accueil</a>
    </div>
    <div class="searchbar" id="needLogin">
        <textarea id="searchbar" placeholder="mot-clef" rows=1></textarea>
        <button onclick="fetch_db(true)">Rechercher par mot-clef</button>
    </div>
    <div id="!needLogin" hidden>
        <p>Vous devez être connecté pour faire une recherche par mot-clef</p>
    </div>
    <script>
        //On affiche la barre de recherche seulement aux utilisateurs connectés
        var loggedIn = {$loggedIn};
        if(loggedIn == 1){
            let searchbar = document.getElementById("needLogin");
            let Nsearchbar = document.getElementById("!needLogin");
            Nsearchbar.removeAttribute("hidden");
            searchbar.setAttribute("hidden", 0);
        }
    </script>
    <div class="filter">
        <button onclick="Toggle_Filtres()">Filtres</button>
    <div id="MenuF" style="display: list-item;">

        <label for="meridian_select">Localisation:</label>

        <select class="filter" id="meridian_select">
            <option value="">--Tous--</option>
            <option value="m">Méridien</option>
            <option value="l">Voie luo</option>
            <option value="j">Jing jin</option>
            <option value="tf">Zang / Fu</option>
        </select>

        <label for="spot_select">Méridien:</label>

        <select class="filter" id="spot_select">
            <option value="">--Tous--</option>
            <option value="P">Poumon</option>
            <option value="GI">Gros Intestin</option>
            <option value="E">Estomac</option>
            <option value="Rte">Rate</option>
            <option value="C">Coeur</option>
            <option value="IG">Intestin Grêle</option>
            <option value="V">Vessie</option>
            <option value="R">Rein</option>
            <option value="MC">Maitre du Coeur</option>
            <option value="TR">Triple Réchauffeur</option>
            <option value="VB">Vésicule Biliaire</option>
            <option value="F">Foie</option>
        </select>
        
        <label for="spot_select">Caractéristique:</label>

        <select class="filter" id="caracteristique_select">
            <option value="">--Tous--</option>
            <option value="e">Externe</option>
            <option value="i">Interne</option>
            <option value="p">Plein</option>
            <option value="v">Vide</option>
            <option value="c">Chaud</option>
            <option value="f">Froid</option>
        </select>
        <button onclick="fetch_db(false)">Rechercher par filtres</button>
    </div>
    <br>
    <div>
        <table id="table">
            <tr>
                <th>Pathologie</th>
                <th>Symptome</th>
            </tr>
        </table> 
    </div>
</body>
</html>