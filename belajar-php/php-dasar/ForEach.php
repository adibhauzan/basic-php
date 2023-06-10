<?php 

//tanpa for each
$names = ["adib", "Hauzan", "Sofyan"];

for($i=0; $i < count($names); $i++){
    echo "data ke $i = $names[$i]" . PHP_EOL;
}

//menggunakan for each

$names = ["adib", "Hauzan", "Sofyan"];

foreach ($names as $bujang =>$name) {
    echo "Hello $bujang = $name" . PHP_EOL;
}

$person = [
    "first_name" => "adib",
    "middle_name" => "hauzan",
    "last_name" => "sofyan"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

?>