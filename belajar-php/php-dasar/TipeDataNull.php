<?php 
$name = "adib";
$name = null;
$age = 21;

echo "nama : ";
echo $name;
echo "\n";

echo "umur : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($age));


$contoh = "adib";
unset($contoh);
var_dump(isset($contoh));



?>