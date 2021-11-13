<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Models\produkModel;
use App\Http\Controllers\ProdukController;



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

// baris dibawah menyatakan bahwa fungsi buat route ini 
// diambil dari file ProdukController.php dengan memanggil 
// salah satu method yang ada di file tersebut
Route::get('/semua-produk', [ProdukController::class, 'index']);

Route::get('/detail-produk/{slug}', [ProdukController::class, 'show']);

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