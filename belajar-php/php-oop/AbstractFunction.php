<?php 

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Cingo";
$cat->run();

$dog = new Dog();
$dog->name = "Andre";
$dog->run();
?>