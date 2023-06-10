<?php 

class Produk
{
    private $judul,
     $penulis,
     $penerbit,
     $diskon,
     $harga;

    public function __construct(string $judul, string $penulis, string $penerbit, ?int $harga = null)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function setJudul(String $judul){
        $this->judul = $judul;
    }

    public function getJudul(){
       return $this->judul;
    }
    
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon ($diskon){
        $this->diskon = $diskon;
    }

    public function getHarga():int{
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setWaktuMain($waktumain){
        $this->waktumain = $waktumain;
    }

    public function GetWaktuMain():Int
    {
        return $this->waktumain;
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

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 75000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer" , 75000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

echo $produk2->setJuduL("GTA V");
echo "<br>";
echo $produk2->getJudul();
echo "<hr>";

echo $produk2->setPenulis("Rockstar North");
echo "<br>";
echo $produk2->getPenulis();
echo "<hr>";

echo $produk2->setPenerbit("Rockstar Games");
echo "<br>";
echo $produk2->getPenerbit();
echo "<hr>";

echo $produk2->setWaktuMain(60);
echo "<br>";
echo $produk2->GetWaktuMain();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";




