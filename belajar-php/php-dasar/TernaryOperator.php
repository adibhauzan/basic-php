<?php 

$gender = "Laki-Laki";

$hi = null;

if($gender == "pria" || "Pria" || "cowok" || "Cowok" || "laki-laki" || "Laki-Laki"){
    $hi = "Hi Bro";
} else if($gender == "wanita" ||"Wanita" || "cewek" || "Cewek"){
    $hi = "Hi nona";
} else {
    $hi = "gender kamu apa?";
}

echo $hi . PHP_EOL;

$gender = "PRIA";
$hi = $gender == "pria" || "Pria" || "cowok" || "Cowok" || "laki-laki" || "Laki-Laki" ? "Hi Bro" : "Hi Nona";

echo $hi . PHP_EOL;
?>