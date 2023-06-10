<?php 

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $waktumain;
    public $halaman;
 
    public function __construct(string $judul, string $penulis, string $penerbit, ?int $harga = null, ?int $waktumain = null, ?int $halaman = null)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktumain = $waktumain;
        $this->halaman = $halaman;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
  
        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}) - $this->halaman Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}) ~ $this->waktumain Jam";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Komik", "Naruto", "Masashi Kishimoto", 75000, null, 50);
$produk2 = new Game("Game", "Uncharted", "Neil Druckmann", 75000, 50, null);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
