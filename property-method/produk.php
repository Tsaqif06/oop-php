<?php

class Produk
{
    public  $judul = "Judul",
        $penulis = "Penulis",
        $penerbit = "Penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->judul, $this->penulis";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Doraemon";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Ninja Hatori";
// $produk2->jumlahBarang = 12;
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Doraemon";
$produk3->penulis = "Fujiko F. Fujio";
$produk3->penerbit = "Shogakukan";
$produk3->harga = "10000";

$produk4 = new Produk();
$produk4->judul = "Detective Conan";
$produk4->penulis = "Gosho Aoyama";
$produk4->penerbit = "Shogakukan";
$produk4->harga = "10000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Komik : " . $produk4->getLabel();
