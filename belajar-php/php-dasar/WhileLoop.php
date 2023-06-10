<?php 

$counter = 10;

while ($counter >= 1) {
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter--;
}

while ($counter <= 10):
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;


?>