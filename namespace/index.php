<?php

require_once 'App/init.php';

$produk1 = new Komik("Doraemon", "Fujiko F. Fujio", "Shogakukan", 10000, 100);
$produk2 = new Game("Pro Evolution Soccer 2021", "Konami", "Konami", 240000, 5);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
echo '<hr>';
// new App\Produk\User();
// echo '<br>';
// new App\Service\User();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ProdukUser();
echo '<br>';
new ServiceUser();
