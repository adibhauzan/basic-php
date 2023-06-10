<?php 

$sayHello = function (string $name){
    echo "hi $name" . PHP_EOL;
};

$sayHello("adib");


function sayGoodBye(String $name , $filter){
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Adib", function(string $name){
    return strtoupper($name);
});


function sayWellcome(string $name , $filter){
    $finalName = $filter($name);
    echo "Wellcome $finalName" . PHP_EOL;
}

$filterFunction = function(string $name){
    return strtoupper($name);
};

sayWellcome("adib", $filterFunction);

$firstName = "Adib";
$lastname = "Hauzan";


$sayHelloAdib = function () use ($firstName , $lastname) {
    echo "Hello $firstName $lastname" . PHP_EOL;
};

$sayHelloAdib();

?>