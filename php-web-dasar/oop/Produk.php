<?php




class Komik
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function sayHello(){
        return "Hello $this->penulis" . PHP_EOL;
    }

    public function getLabel(){
        return "Label by $this->penulis, $this->penerbit" . PHP_EOL;
    }
}

class Novel extends Komik
{


}


$komik1 = new Komik();
echo $komik1->judul = "Naruto";
echo "<br>";
echo $komik1->penulis = "Masashi Kishimoto";
echo "<br>";
echo $komik1->penerbit = "Shounen Jump";
echo "<br>";
echo $komik1->harga = "20.500";
echo "<br>";
echo $komik1->sayHello();
echo "<br>";
echo $komik1->getLabel();
echo "<br>";


$novel1 = new Novel();
echo "<br>";
echo $novel1->judul = "Pasung Jiwa";
echo "<br>";
echo $novel1->penulis = "Oky Madasari";
echo "<br>";
echo $novel1->penerbit = "PT Gramedia Pustaka Utama";
echo "<br>";
echo $novel1->harga = "75.000";
echo "<br>";
echo $novel1->getLabel();
echo "<br>";


