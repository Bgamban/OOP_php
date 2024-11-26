<?php 
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

spl_autoload_register(function($class){ //berikut adalah Closure fungsi tanpa nama & berada didalam parameter
    require_once 'Produk/' . $class . '.php';
}); 