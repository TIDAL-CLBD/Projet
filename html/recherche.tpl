<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/recherche.css">
    <script src="../js/recherche.js"></script>
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
        <button onclick=fetch_db()>Filtres</button>
        <p id="resultat"></p>
    // en cours faire un menu correct
        <button onclick="Toggle_Filtres()">Filtres</button>
function Toggle_Filtres()
{
    <input type="checkbox" id="Symptome_1" name=""Symptome_1">
    <input type="checkbox" id="Symptome_2" name=""Symptome_2">
    <input type="checkbox" id="Symptome_3" name=""Symptome_3">
    // if zone show alors zone pas show
    // if zone pas show alors zone show
}
    // fin du en cours
    </div>
    <div class="subwrapper">
        <!-- Temporaire: -->
        <p class="M">Maladie 1 </p>
        <p class="S">Symptome 1</p>
        <p class="M">Maladie 2 </p>
        <p class="S">Symptome 2</p>
        <p class="M">Maladie 3 </p>
        <p class="S">Symptome 3</p>
    </div>
</body>
</html>
