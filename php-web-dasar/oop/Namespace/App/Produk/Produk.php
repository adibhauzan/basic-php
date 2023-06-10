<?php  

require_once "InfoProduk.php";

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
