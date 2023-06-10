<?php 

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Adib");
$company->programmer->name = "Adib";
var_dump($company);

$company->programmer = new BackendProgrammer("Hauzan");
var_dump($company);

$company->programmer = new FrontendProgrammer("Sofyan");
var_dump($company);

sayHelloProgrammer(new Programmer("Adib"));
sayHelloProgrammer(new BackendProgrammer("Hauzan"));
sayHelloProgrammer(new FrontEndProgrammer("Sofyan"));

?>