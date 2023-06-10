<?php 

$names = ["adib", "hauzan", "sofyan"];
var_dump($names[2]);

$names[1] = "Rafifah";
var_dump($names);
$names[] = "pintar";
var_dump($names);

unset($names[1]);
var_dump($names);

unset($names[3]);
var_dump($names);
var_dump(count($names));

$adib = array(
    "id" => "adib",
    "name" => "adib hauzan",
    "age" => 21
);
var_dump($adib);
var_dump($adib["age"]);

$mala = [
    "id" => "mala",
    "name" => "wati komalasari",
    "age" => 20,    
    "address" => [
        "city" => "bandung",
        "country" => "indonesia"
    ]
];
var_dump($mala);
var_dump($mala["address"]["country"]);


?>