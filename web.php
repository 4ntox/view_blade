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

Route::get('/', function () {
    return view('coba',array (
        "nama" => "budi"
    ));
});


Route::get('coba-routing/{nama?}', function ($nama = "Nilai default") {
    return "ini adalah hasil percobaan routing. Kenalin, aku " .$nama;
});
 
Route::get('/halo', function {} {
    return view('halo')->with("name", "Jong Koding with");
        "nama"
    });
});
 