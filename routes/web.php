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
    return view('pages\home', [
        "title" => "Home"
    ]);
});

Route::get('/tentang-athifah-mete-kendari', function () {
    return view('pages\tentang-kami', [
        "title" => "Tentang Kami"
    ]);
});

Route::get('/cara-memesan', function () {
    return view('pages\cara-memesan', [
        "title" => "Cara Memesan"
    ]);
});

// $produk =[
//     [
//         "nama-produk" => "Cokelat Mete 100 gr",
//         "harga-produk" => "17.000",
//         "deskripsi-produk" => 



//     ]
// ]

Route::get('/produk', function () {
    return view('pages\produk', [
        "title" => "Detail Produk"
    ]);
});

Route::get('/makanan-khas-sultra', function () {
    return view('pages\makanan-sultra', [
        "title" => "Makanan Khas Sultra"
    ]);
});

Route::get('/kerajinan-khas-sultra', function () {
    return view('pages\kerajinan-sultra', [
        "title" => "Kerajinan Khas Sultra"
    ]);
});

Route::get('/kontak-kami', function () {
    return view('pages\kontak-kami', [
        "title" => "Kontak Kami"
    ]);
});