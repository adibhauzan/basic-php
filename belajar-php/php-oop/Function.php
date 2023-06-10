<?php 

require_once "data/Person.php";

$adib = new Person("Adib", "Bandung");
$adib->name = "Adib";
$adib->sayHello("Budi");
$adib->info();

$budi = new Person("Budi", "Bandung");
$budi->name = "Budi";
$budi->sayHello(null);
$budi->info();

?>