<?php 

require_once "data/Car.php";

use Data\Avanza;

$car = new Avanza();
$car->drive();

echo "Ban Mobil Sebanyak {$car->getTire()} ban" . PHP_EOL;
echo "Brand Mobilnya yaitu {$car->getBrand()}" . PHP_EOL;
echo "Mobil {$car->isMaintenance()}"  . PHP_EOL;

var_dump($car);
?>