<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController extends Controller
{
    public function hitung(){
        $bill = 5;
        $bil2=10;
        $hasil = $bill + $bil2;
        return view ('hitung', ['hasiljumlah' =>$hasil]);
    }
}
