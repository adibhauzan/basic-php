<?php 

require_once "Produk.php";
require_once "InfoProduk.php";
require_once "Game.php";
require_once "Komik.php";




class CetakInfoProduk
{

    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br> ";

        foreach($this->daftarProduk as $p){
            $str .= "-" . "{$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}


?>