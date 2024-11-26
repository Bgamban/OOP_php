<!-- FUNGSI DARI SET DAN GET INI UNTUK BISA MENGAKSES PRIVATE KARENA AGAR DAPAT DITAMBAHKAN SESUATU DIDALAM FUNCTIONNYA -->
<?php 
abstract class Produk{ //kalo kita tidak akan pernah melakukan instansiasi pada class produk maka class itu dapat dijadikan class abstract
    public $judul;
    private $penulis;

    protected $penerbit = "penerbit",
            $diskon = 0;

    protected $harga;
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
    public function setPenulis($penulis){ //KALO SET HARUS ADA PARAMETER
        $this->penulis = $penulis;
    }
    public function getPenulis(){ //KALO GET GAUSAH
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
    abstract public function infoLengkapProd(); //sedangkan getInfoProduk merupakan method abstract
    public function getInfo(){ //getInfo untuk mengambil informasi dari produk
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}
class Komik extends Produk{ //Komik diizinkan menggunakan property Produk/parentnya
    public $jumlahHalaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman){
        parent::__construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function infoLengkapProd()
    {
        $str = "Komik : " . $this-> getInfo() . " - {$this->jumlahHalaman} Halaman."; //parent untuk memanggil dari parentnya
        return $str;
    }
}
class Game extends Produk{
        public $wktMain;
        public function __construct($judul, $penulis, $penerbit, $harga, $wktMain){
            parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
        }
        public function infoLengkapProd(){
        $str = "Game : " . $this->getInfo() . " - {$this->wktMain} Level."; //::adalah method static
        return $str; 
    }
}
class CetakInfoProduk{
    public $daftarProduk = array(); //maka nanti produk1 masuk kesini
    public function tambahProduk(Produk $produk){ //yang didalam kurung object type
        $this->daftarProduk[] =$produk;
    }
    public function cetak(){
        $str ="Daftar Produk : <br>";
        foreach($this->daftarProduk as $p){
            $str .= "-{$p->infoLengkapProd()}<br>";
        }
        return $str; //setiap function akhiri codenya dengan return agar dapat ditampilkan
    }
}
$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen", 3000, 100);
$produk2 = new Game("The Last of Us", "Makoto Sayaka", " ", 2000, 20);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1); //cetakProduk jalankan fungsi tambahProduk yang tambahProduk berisi object produk1
$cetakProduk->tambahProduk($produk2);