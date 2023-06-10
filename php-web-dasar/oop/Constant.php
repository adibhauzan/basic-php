<?php 

// Const NAMA = "Adib Hauzan";


class Coba {
    Const NAMA = "Adib Hauzan" . "<br>";
    public function testConstant(){
        echo $file = "HAIIII" . "<br>" . __FILE__ . "<br>" .__FUNCTION__;
        return $file;
        
        
    }
}

$coba1 = new Coba();
echo $coba1::NAMA;
echo "<br>";
echo $coba1->testConstant();
echo "<br>";
// echo __FILE__;
// echo $coba1::__FUNCTION__;

?>