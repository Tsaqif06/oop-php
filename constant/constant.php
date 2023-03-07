<?php
// const bisa dengan cara define() atau const
// define('NAMA', 'Tsaqif');
// echo NAMA;
// echo '<br>';

// const ADIK = 'Ovang';
// echo ADIK;

// define tidak bisa disimpan dalam class, digunakan sebagai konstanta global
// const bisa disimpan dalam class

// class Coba {
//     const NAMA = 'Tsaqif';
// }

// echo Coba::NAMA;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public function coba() {
        return __CLASS__;
    }
}

$obj = new Coba;
echo $obj->coba();