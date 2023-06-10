<?php 

require_once "Produk.php";
require_once "InfoProduk.php";


class Game extends Produk implements InfoProduk
{
    public $waktumain;

    public function __construct(string $judul = "judul", string $penulis = "penulis", string $penerbit = "penerbit", ?int $harga = null, ?int $waktumain = null)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain = $waktumain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }
    
    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ $this->waktumain Jam";
        return $str;
    }
}

?>