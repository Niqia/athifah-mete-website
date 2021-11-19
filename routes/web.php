<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardProdukController;
use App\Models\Kategori;
use App\Models\User;
use App\Models\produk_jualan;




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

Route::get('/', [ProdukController::class, 'home']);

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

Route::get('/detail-produk/{product:slug}', [ProdukController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard\dashboard', [
        "title" => "Dashboard",
    ]);
})->middleware('auth');


Route::resource('/dashboard/semua-produk', DashboardProdukController::class)->middleware('auth');

Route::get('/kontak-kami', function () {
    return view('pages\kontak-kami', [
        "title" => "Kontak Kami",
    ]);
});

Route::get('/kategori', function(){
    return view('pages\pilihan-kategori', [
        'title' => 'Kategori Produk',
        'pilihanKategori'=> Kategori::all()
    ]);
});

Route::get('/semua-produk?kategori={kategori:slug}', function(Kategori $kategori){
    return view('pages\semua-produk', [
        'title' => "Kategori Produk: ".$kategori->nama_kategori,
        'products'=> $kategori->products,
    ]);
});

Route::get('/posted-by/{user:name}', function(User $user){    
    return view('pages\semua-produk', [
        'title' => 'Postingan Dari: '.$user->name,
        'products'=> $user->products,
        
    ]);
});







