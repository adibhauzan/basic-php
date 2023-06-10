<?php 

function factiorialLoop(int $value): int{

    $total = 1;
    for ($i=1; $i <= $value ; $i++) { 
        $total *= $i;
    }
    return $total;
}

var_dump(factiorialLoop(5));


function factiorialRecursive (int $value): int{
    if ($value == 1 ) {
        return 1;
    } else {
        return $value * factiorialRecursive($value -1 );
    }
}

var_dump(factiorialRecursive(5));

?>