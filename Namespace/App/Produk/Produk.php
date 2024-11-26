<?php 
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