<?php 

// Tanpa Null Coalescing Operator
$data = [];

if(isset($data['action'])){
    $action = $data['action'];
} else {
    $action = 'nothing';
}

echo $action . PHP_EOL;

// Menggunakan Null Coalescing Operator
$data = [
    "action" => "create"
];

$action = $data['action'] ?? 'nothing';

echo $action . PHP_EOL;
?>