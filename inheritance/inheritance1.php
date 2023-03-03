<?php

class Produk
{
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $halaman,
        $jam,
        $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $jam = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->jam = $jam;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function moreInfo()
    {
        // Komik : Doraemon | Fujiko F. Fujio, Shogakukan (Rp. 10000) - 100 Halaman.
        // Game : Pro Evolution Soccer 2021 | Konami, Konami (Rp. 240000) - 5 Jam.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->halaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->jam} Jam.";
        }
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

$produk1 = new Produk("Doraemon", "Fujiko F. Fujio", "Shogakukan", 10000, 100, 0, "Komik");
$produk2 = new Produk("Pro Evolution Soccer 2021", "Konami", "Konami", 240000, 0, 5, "Game");

echo $produk1->moreInfo();
echo "<br>";
echo $produk2->moreInfo();
