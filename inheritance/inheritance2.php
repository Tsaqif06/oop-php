<?php

class Produk
{
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $halaman,
        $jam;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $jam = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->jam = $jam;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function moreInfo()
    {
        // Komik : Doraemon | Fujiko F. Fujio, Shogakukan (Rp. 10000) - 100 Halaman.
        // Game : Pro Evolution Soccer 2021 | Konami, Konami (Rp. 240000) - 5 Jam.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    public function moreInfo()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->halaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public function moreInfo()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jam} Jam";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Doraemon", "Fujiko F. Fujio", "Shogakukan", 10000, 100, 0);
$produk2 = new Game("Pro Evolution Soccer 2021", "Konami", "Konami", 240000, 0, 5);

echo $produk1->moreInfo();
echo "<br>";
echo $produk2->moreInfo();
