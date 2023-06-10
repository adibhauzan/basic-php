<?php



class Komik
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul, $penulis, $penerbit, $harga){
       echo $this->judul = $judul;
       echo "<br>";
       echo $this->penulis = $penulis;
       echo "<br>";
       echo $this->penerbit = $penerbit;
       echo "<br>";
       echo $this->harga = $harga; 
       echo "<br>";
    }

    public function getInfoProduk(){
        return "Label by $this->penulis, $this->penerbit" . PHP_EOL;
    }
}

class Novel extends Komik
{


}


$komik1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 75000);
echo "<br>";
echo $komik1->getInfoProduk();
echo "<br>";


$novel1 = new Novel("Pasung Jiwa", "Oky Madasari", "PT Gramedia Pustaka Utama", 75000);
echo "<br>";
$komik1->getInfoProduk();
echo "<br>";




