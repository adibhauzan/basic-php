<?php 

function sayHello( $firstname, $lastname = "Anonymous"){
    echo "hai $firstname $lastname" . PHP_EOL;
}

sayHello("bujanggg");
sayHello("adib" , " ");

function sum($first , $last){

    $total = $first + $last;
    echo "Total = $first + $last = $total" . PHP_EOL;

}

sum(100, 100);
sum(100, "100");
sum("100", "100");

function sumAll(...$values){

    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + " , $values). " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];


sumAll(1, 2, 3, 4, 5);
sumAll(...$values);


?>