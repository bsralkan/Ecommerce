<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index(){
        $isim = 'Busra';
        $soyisim = 'Alkan';
        return view('anasayfa', compact('isim', 'soyisim'));
    }
}
