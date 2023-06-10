<?php 

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Adib";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "joko";
$vp->sayHello("adib");

?>