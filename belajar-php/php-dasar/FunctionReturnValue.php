<?php 

function sum ( int $first, int $last){

    $total = $first + $last;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

function getFinalValue(int $value): string{
    if($value >= 80){
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 70) {
        return "D";
    } else {
        return "E";
    }
}

$hasilAkhir = getFinalValue(30);
var_dump($hasilAkhir);

?>