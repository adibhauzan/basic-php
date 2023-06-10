<?php 

class Person
{

    const AUTHOR = "ADIB HAUZAN SOFYAN";

    var string $name;
    var ?string $address;
    var string $country;

    function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name){
        if (is_null($name)) {
            echo "Hello my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $name , my name is {$this->name}" . PHP_EOL;
        }
    }

    function info(){
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }


    function __destruct()
    {
        echo "Object $this->name is Destroyed" . PHP_EOL;
    }
}


?>