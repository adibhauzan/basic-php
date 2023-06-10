<?php 

require_once "data/shape.php";

use Data\{Shape, Rectangel};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangel = new Rectangel();
echo $rectangel->getCorner() . PHP_EOL;
echo $rectangel->getParentCorner() . PHP_EOL;

?>