<?php

class Produk
{
    public  $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    public function cetak (Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Doraemon", "Fujiko F. Fujio", "Shogakukan", 10000);
$produk2 = new Produk("Detective Conan", "Gosho Aoyama", "Shogakukan", 10000);

$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk1);
echo "<br>";
echo $infoProduk->cetak($produk2);