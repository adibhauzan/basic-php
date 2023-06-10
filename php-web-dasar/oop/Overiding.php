<?php 

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct(string $judul, string $penulis, string $penerbit, ?int $harga = null)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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
    public $halaman;
    
    public function __construct(string $judul = "judul", string $penulis = "penulis", string $penerbit = "penerbit", ?int $harga = null, ?int $halaman = null)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " ~ $this->halaman Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $waktumain;

    public function __construct(string $judul = "judul", string $penulis = "penulis", string $penerbit = "penerbit", ?int $harga = null, ?int $waktumain = null)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain = $waktumain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ $this->waktumain Jam";
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

$produk1 = new Komik("Komik", "Naruto", "Masashi Kishimoto", 75000, 100);
$produk2 = new Game("Game", "Uncharted", "Neil Druckmann", 75000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
