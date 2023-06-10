<?php 

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\{Conflict as Conflict1, Dummy as Dummy, Sample as Sample};
use function Helper\{helpme as help};

$conflict1 = new Conflict1();
$dummy1 = new Dummy();
$sample1 = new Sample();

help();

?>