<?php
// option méridien en [0] puis option(s) caracteristique en [1] et [2]
$DATA_decodage_code = [
    "m" => ["m", "", ""],
    "me" => ["m", "e", ""],
    "mi" => ["m", "i", ""],
    "tf" => ["tf", "", ""],
    "tfp" => ["tf", "p", ""],
    "tfv" => ["tf", "v", ""],
    "tfv+" => ["tf", "v", ""],
    "tfv-" => ["tf", "v", ""],
    "tfc" => ["tf", "c", ""],
    "tff" => ["tf", "f", ""],
    "tfvf" => ["tf", "v", "f"],
    "tfvfi" => ["tf", "v", "f"],
    "tfvfm" => ["tf", "v", "f"],
    "tfvfs" => ["tf", "v", "f"],
    "tfpc" => ["tf", "p", "c"],
    "tfpci" => ["tf", "p", "c"],
    "tfpcm" => ["tf", "p", "c"],
    "tfpcs" => ["tf", "p", "c"],
    "j" => ["j", "", ""],
    "l" => ["l", "", ""],
    "l2p" => ["l", "p", ""],
    "l2v" => ["l", "v", ""],
    "lp" => ["l", "p", ""],
    "lv" => ["l", "v", ""],
    "mv" => ["mv", "", ""],
    "mva" => ["mv", "", ""],
    "mvi" => ["mv", "", ""],
    "mvp" => ["mv", "", ""],
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