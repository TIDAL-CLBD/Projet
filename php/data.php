<?php
$DATA_decodage_code = [
    "m" => ["m", "", ""],
    "mp" => ["m", "p", ""],
    "mpe" => ["m", "p", "e"],
    "mpi" => ["m", "p", "i"],
    "me" => ["m", "", "e"],
    "mi" => ["m", "", "i"],
    "l" => ["l", "", ""],
    "lp" => ["l", "", "p"],
    "lv" => ["l", "", "v"],
    "j" => ["j", "", ""],
    "z" => ["z", "", ""],
    "zp" => ["z", "", "p"],
    "zv" => ["z", "", "v"],
    "zc" => ["z", "", "c"],
    "zf" => ["z", "", "f"],
    ];

$DATA_options_caracteristique = [
    ""=>"",
    "e" => "externe",
    "i" => "interne",
    "p" => "plein",
    "v" => "vide",
    "c" => "chaud",
    "f" => "froid"

    ];
$DATA_options_meridien = [
    "" => "",
    "tf" => "Zang / Fu",
    "j" => "Jing jin",
    "l" => "Voie luo",
    "m" => "Méridien"
];
$DATA_options_spot = [
    "" => "",
    "P" => "Poumon",
    "GI" => "Gros Intestin",
    "E" => "Estomac",
    "Rte" => "Rate",
    "C" => "Coeur",
    "IG" => "Intestin Grêle",
    "V" => "Vessie",
    "R" => "Rein",
    "MC" => "Maitre du Coeur",
    "TR" => "Triple Réchauffeur",
    "VB" => "Vésicule Biliaire",
    "F" => "Foie"
    // il manque qq spots à traiter plus tard si on a le temps
];
?>