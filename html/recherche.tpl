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
        <button onclick="Toggle_Filtres()">Filtres</button>

    <input type="checkbox" id="Symptome_1" name="Symptome_1">
    <input type="checkbox" id="Symptome_2" name="Symptome_2">
    <input type="checkbox" id="Symptome_3" name="Symptome_3">

    </div>
    <table id="table">
        <tr>
            <th>Pathologie</th>
            <th>Symptome</th>
        </tr>
    </table>
</body>
</html>
