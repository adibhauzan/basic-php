<?php 

require_once "data/Person.php";



define("APPLICATION", "Belajar PHP OOP");
const NGAPAIN = "Belajar PHP OOP";

echo APPLICATION . PHP_EOL;
echo NGAPAIN . PHP_EOL;
echo Person::AUTHOR . PHP_EOL; 
/*untuk memanggil constant tidak menggunakan object namum langsung dipanggil dari classnya */

?>