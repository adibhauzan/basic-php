<?php 

require_once "Produk.php";
require_once "InfoProduk.php";

class Komik extends Produk implements InfoProduk
{
    public $halaman;

    public function __construct(string $judul = "judul", string $penulis = "penulis", string $penerbit = "penerbit", ?int $harga = null, ?int $halaman = null)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " ~ $this->halaman Halaman";
        return $str;
    }
}

?>