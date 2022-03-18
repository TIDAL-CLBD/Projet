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

    <h1 class="header"> Acupuncture </h1>
    <h2 href="../php/index.php">Accueil</h2>
    <div class="searchbar">
        <textarea id="searchbar" placeholder="mot-clef" rows=1></textarea>
        <style>
        textarea{
            resize: none;
        }
        </style>
        <button onclick="fetch_db(true)">Rechercher par mot-clef</button>
    </div>
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