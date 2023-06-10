<?php 

require_once "data/Person.php";

$person = new Person("Adib", "Bandung");
$person->name = "Adib";
$person->address = "Bandung";
$person->country = "Indonesia";
$person->sayHello("adib");

// var_dump($person);

echo "Name = $person->name" . PHP_EOL;
echo "address = $person->address" . PHP_EOL;
echo "country = $person->country" . PHP_EOL;


$person2 = new Person("Budi", null);
$person2->name = "Budi";
$person2->address = null;
$person2->country = "Indonesia";

// var_dump($person2);

echo "Name = $person2->name" . PHP_EOL;
echo "address = $person2->address" . PHP_EOL;
echo "country = $person2->country" . PHP_EOL;

?>