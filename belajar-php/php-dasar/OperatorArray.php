<?php 

$first = [
    "first_name" => "adib"
];

$last = [
    "last_name" => "Hauzan"
];


$full = $first + $last;
var_dump($full);


$a = [
    "first_name" => "adib",
    "last_name" => "hauzan"
];

$b = [
    "last_name" => "hauzan",
    "first_name" => "adib"
];

var_dump($a == $b);
var_dump($a === $b);

?>