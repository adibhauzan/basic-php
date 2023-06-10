<?php 
class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
   

    public function __construct(String $judul, String $penulis, String $penerbit, int $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "$produk->judul | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 75000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 75000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoproduk1 = new CetakInfoProduk($produk1);
echo $infoproduk1->cetak($produk1);
echo "<br>";
echo $infoproduk1->cetak($produk2);
