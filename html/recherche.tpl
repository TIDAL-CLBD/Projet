<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/recherche.css">
    <script src="../js/recherche.js"></script>
    <script src="../js/Toggle_Filtres.js"></script>
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
        <button onclick="Toggle_Filtres()">T_Filtres</button>
<div id="MenuF" style="display: list-item;">
  <input type=checkbox name="M1" id="M1" >
  <label for="M1">Maladie_1</label>
  <input type=checkbox name="M2" id="M2" >
  <label for="M2">Maladie_2</label>
  <input type=checkbox name="S1" id="S1" >
  <label for="S1">Symptome_1</label>
  <input type=checkbox name="S2" id="S2" >
  <label for="S2">Symptome_2</label>
</div>
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
    <table id="table">
        <tr>
            <th>Pathologie</th>
            <th>Symptome</th>
        </tr>
    </table>
</body>
</html>