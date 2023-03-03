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
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk("Doraemon", "Fujiko F. Fujio", "Shogakukan", 10000);
$produk2 = new Produk("Detective Conan", "Gosho Aoyama", "Shogakukan", 10000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Komik : " . $produk2->getLabel();
