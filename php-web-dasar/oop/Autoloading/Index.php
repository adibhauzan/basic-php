<?php 

require_once "App/Produk/Produk.php";
require_once "App/Produk/Komik.php";
require_once "App/Produk/InfoProduk.php";
require_once "App/Produk/Game.php";
require_once "App/Produk/CetakInfoProduk.php";


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 75000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 75000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
?>