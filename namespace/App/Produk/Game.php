<?php

class Game extends Produk implements InfoProduk
{
    public $jam;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jam = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jam = $jam;
    }

    public function more()
    {
        // Komik : Doraemon | Fujiko F. Fujio, Shogakukan (Rp. 10000) - 100 Halaman.
        // Game : Pro Evolution Soccer 2021 | Konami, Konami (Rp. 240000) - 5 Jam.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function moreInfo()
    {
        $str = "Game : " . $this->more() . " ~ {$this->jam} Jam";
        return $str;
    }
}
