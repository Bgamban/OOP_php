<?php 
require_once 'App/init.php';
$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen", 3000, 100);
$produk2 = new Game("The Last of Us", "Makoto Sayaka", " ", 2000, 20);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
echo "<hr>";
new Coba();