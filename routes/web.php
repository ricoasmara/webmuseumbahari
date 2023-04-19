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
    return view('home',[
    "title"=> "Home"
    ]);
});

Route::get('/perpustakaan', function () {
    $perpustakaan=[
        [
            "title" =>"Judul Buku",
            "slug"=>"judul-perpustakana-pertama",
            "author"=> "Ricoasmara",
            "body" => "loremasdasdjowdhiafhodsafhdisahfdsiaufhdsifhsduaifhdsfffffffffffffffffffffffusdhfsdiuhfafhawepfisdfbnsaifbusdadasdasdsadsadsaddfgfhjgjhkjlkjl;i;hjfghgfgdfssdfds"
        ],
        [
            "title" =>"Judul Buku kedua",
            "slug"=>"judul-perpustakana-kedua",
            "author"=> "tasya",
            "body" => "asdwqdasytasy aasdjoiowajdbfsdajhbfsdbfjsadhbfewysftgwefosudofpuisouf"
        ],
    ];
    return view('perpustakaan',[
        "title"=>"Perpustakaan",
        "post"=>$perpustakaan
    ]);
});



Route::get('/about', function () {
    return view('about',[
        "title"=>"About",
        "Nomer"=>"0857****",
        "Email"=>"museumB@gmail.com"
    ]);
});

Route::get('/koleksi', function () {
    return view('koleksi',[
    "title"=> "Koleksi"
    ]);
});


