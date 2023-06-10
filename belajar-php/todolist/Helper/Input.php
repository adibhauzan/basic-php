<?php



function input (string $info):string
{
    echo "$info : ";
    $result = fgets(STDIN);
    Return trim($result);
}

?>