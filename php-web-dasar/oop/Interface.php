<?php
 
interface InfoProduk{
    public function getInfoProduk();
}

abstract class Produk
{
    protected $judul,
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

    public function setJudul(String $judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga(): int
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setWaktuMain($waktumain)
    {
        $this->waktumain = $waktumain;
    }

    public function GetWaktuMain(): Int
    {
        return $this->waktumain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

    
}

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

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 75000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 75000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();