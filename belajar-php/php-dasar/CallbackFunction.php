<?php 

function sayHello (string $name , callable $filter){
    $finalName = call_user_func($filter , $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("adib" , "strtoupper");
sayHello("adib" , "strtolower");
sayHello("adib" , fn($name)=> strtoupper($name));
sayHello("adib" , function(string $name):string { return strtoupper($name); });



?>