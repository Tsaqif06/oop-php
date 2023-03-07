<?php

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
