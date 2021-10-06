<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//php artisan make:controller DataSiswaController

class DataSiswaController extends Controller
{
    public function datasiswa () {
        $nama = 'Agnes Candra Iswara';
        return $nama;
    }

    public function datasiswi () {
        $nama = 'Silvi Lestari';
        return $nama;
    }

    // jika menggunakan parameter
    public function nama ($nama) {
        return 'Nama Anda Adalah : ' .$nama;
    }

}
