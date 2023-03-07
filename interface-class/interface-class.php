<?php

interface InfoProduk
{
    public function moreInfo();
}

abstract class Produk
{
    protected  $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    { //set = setter
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function getJudul()
    { // get = getter
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        if (!is_string($penulis)) {
            throw new Exception("penulis harus string");
        }
        $this->penulis = $penulis;
    }

    public function getPenulis()
    { // get = getter
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    { //set = setter
        if (!is_string($penerbit)) {
            throw new Exception("penerbit harus string");
        }
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    { // get = getter
        return $this->penerbit;
    }

    public function getDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function setDiskon($diskon = 0)
    {
        $this->diskon = $diskon;
    }

    abstract public function more();
}

class Komik extends Produk implements InfoProduk
{
    public $halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
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
        $str = "Komik : " . $this->more() . " - {$this->halaman} Halaman";
        return $str;
    }
}

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

class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->moreInfo()} <br>";
        }

        return $str;
    }
}

$produk1 = new Komik("Doraemon", "Fujiko F. Fujio", "Shogakukan", 10000, 100);
$produk2 = new Game("Pro Evolution Soccer 2021", "Konami", "Konami", 240000, 5);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
