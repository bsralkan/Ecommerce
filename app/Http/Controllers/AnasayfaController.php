<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index(){
        $isim = 'Busra';
        $soyisim = 'Alkan';
        $isimler = ['Busra', 'Fatma', 'Hatice'];
        return view('anasayfa', compact('isim', 'soyisim', 'isimler'));
    }
}
