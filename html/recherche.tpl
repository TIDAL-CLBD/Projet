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


    
    <h1 class="header" href="index.tpl"> Acupuncture </h1>

    <div class="searchbar">
        <!-- Temporaire: -->
        <textarea>Recherche</textarea>
    </div>
    <div class="filter">
        <!-- Temporaire: -->
        <button onclick="test()">Filtres</button>
        <p id="resultat"></p>
        <button onclick="Toggle_Filtres()">Toggle_Filtres</button>
<div id="MenuF" style="display: list-item;">

    <label for="meridian_select">Choose a meridian:</label>

    <select id="meridian_select">
        <option value="">--Please choose an option--</option>
        <option value="meridien">Méridien</option>
        <option value="voie_luo">Voie luo</option>
        <option value="jing_jin">Jing jin</option>
        <option value="zang">Zang</option>
    </select>

    <label for="spot_select">Choose a spot:</label>

    <select id="spot_select">
        <option value="">--Please choose an option--</option>
        <option value="poumon">Poumon</option>
        <option value="coeur">Coeur</option>
        <option value="jambe">Jambe</option>
        <option value="bras">Bras</option>
    </select>
    
    <label for="spot_select">Choose a caracteristique:</label>

    <select id="caracteristique_select">
        <option value="">--Please choose an option--</option>
        <option value="externe">Externe</option>
        <option value="interne">Interne</option>
        <option value="plein">Plein</option>
        <option value="vide">Vide</option>
        <option value="chaud">Chaud</option>
        <option value="froid">Froid</option>
    </select>
</div>

    <table id="table">
        <tr>
            <th>Pathologie</th>
            <th>Symptome</th>
        </tr>
    </table> 
    
</body>
</html>