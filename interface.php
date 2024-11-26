<?php 
interface InfoProduk{
    public function infoLengkapProd();
}
abstract class Produk{ 
    public $judul;
    protected $penulis,
            $penerbit = "penerbit",
            $diskon = 0,
            $harga;
    public function __construct($judul, $penulis, $penerbit, $harga){ 
        $this -> judul = $judul;
        $this -> penulis = $penulis;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
    }
    public function setJudul($judul){
        if(!is_string($judul)){
            throw new Exception("Judul Harus String");
        }
        $this -> judul =$judul;
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
    public function setHarga($harga){
        $this->harga = $harga ;
    }
    public function getHarga(){
        return $this->harga- ($this-> harga*$this ->diskon/100);
    }
    public function setDiskon($diskon){
        $this -> diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
    public function __destruct(){
        echo "ini adalah method yang terakhir dieksekusi";
    }
    public function __toString()
    {
        return "{$this->judul}(Rp.{$this->harga})";
    }
    public function getLabel(){ 
        return "$this->penulis, $this-> penerbit, $this-> halaman";
    }
    abstract public function getInfo();

}
class Komik extends Produk implements InfoProduk{
    public $jumlahHalaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman){
        parent::__construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
    public function infoLengkapProd()
    {
        $str = "Komik : " . $this-> getInfo() . " - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
}
class Game extends Produk implements InfoProduk{
        public $wktMain;
        public function __construct($judul, $penulis, $penerbit, $harga, $wktMain){
            parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
        }
        public function getInfo(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
            return $str;
        }
        public function infoLengkapProd(){
        $str = "Game : " . $this->getInfo() . " - {$this->wktMain} Level.";
        return $str; 
    }
}
class CetakInfoProduk{
    public $daftarProduk = array();
    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] =$produk;
    }
    public function cetak(){
        $str ="Daftar Produk : <br>";
        foreach($this->daftarProduk as $p){
            $str .= "-{$p->infoLengkapProd()}<br>";
        }
        return $str;
    }
}
// $produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen", 3000, 100);
// $produk2 = new Game("The Last of Us", "Makoto Sayaka", " ", 2000, 20);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

$tes = new Produk();