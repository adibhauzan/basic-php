<?php 

function foo(){
    echo "Foo" . PHP_EOL;
}

function bar(){
    echo "Bar" . PHP_EOL;
}

$functionName = "foo";
$functionName();


$functionName = "bar";
$functionName();




function sayHello(string $name , $filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): String{
    return "sample $name";
}

sayHello("adib", "sampleFunction");


function sayHi(String $name ,$filter){
    $finalName = $filter($name);
    echo "hi $finalName" . PHP_EOL;
}

function contohFunction(string $name):string{
    return "contoh $name";
}

sayHi("adib",  "contohFunction");




?>