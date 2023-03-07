<?php

class Produk
{
    private  $judul,
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
    public $halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->halaman = $halaman;
    }

    public function moreInfo()
    {
        $str = "Komik : " . parent::moreInfo() . " - {$this->halaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $jam;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jam = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jam = $jam;
    }

    public function moreInfo()
    {
        $str = "Game : " . parent::moreInfo() . " ~ {$this->jam} Jam";
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

$produk1 = new Komik("Doraemon", "Fujiko F. Fujio", "Shogakukan", 10000, 100);
$produk2 = new Game("Pro Evolution Soccer 2021", "Konami", "Konami", 240000, 5);

echo $produk1->moreInfo();
echo "<br>";
echo $produk2->moreInfo();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk3 = new Produk("BarangBaru");
echo $produk3->getJudul();
echo "<br>";
$produk3->setJudul(10);
echo $produk3->getJudul();
