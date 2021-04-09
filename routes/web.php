<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/hello/{name}', function ($name) {
    return "Hello $name";
});

Route::get('/hello/{name?}', function ($name="user") {
    return "Hello $name";
})->name("with_optional_parameter");


Route::get('/deneme', function ($name="user") {
    return redirect()->route('with_optional_parameter', ['name' => 'Busra']);
});


Route::get('/', 'AnasayfaController@index');

Route::get('/kategori', function (){
    return view('kategori');
});
Route::get('/urun', function (){
    return view('urun');
});
Route::get('/sepet', function (){
    return view('sepet');
});
