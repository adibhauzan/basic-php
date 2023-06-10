<?php 
class Produk
{
    public $tipe;
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $waktumain;
    public $halaman;
 
   

    public function __construct(String $tipe ,String $judul, String $penulis, String $penerbit, ?int $harga, ?int $waktumain, ?int $halaman)
    {
        $this->tipe = $tipe;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktumain = $waktumain;
        $this->halaman = $halaman;
       
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        if($this->tipe == "Komik"){
            $str .= " - {$this->halaman} Halaman.";
        }else if($this->tipe == "Game"){
            $str .= " ~ {$this->waktumain} Jam.";
        }
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "$produk->judul | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Komik","Naruto", "Masashi Kishimoto", "Shounen Jump", 75000, null, 100);

$produk2 = new Produk("Game","Uncharted", "Neil Druckmann", "Sony Computer", 75000, 50 , null);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "<br>";

$infoproduk1 = new CetakInfoProduk($produk1);
echo $infoproduk1->cetak($produk1);
echo "<br>";
echo $infoproduk1->cetak($produk2);
echo "<br>";
echo "<br>";

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo "<br>";