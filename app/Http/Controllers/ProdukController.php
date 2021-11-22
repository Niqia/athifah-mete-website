<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk_jualan;
use App\Models\Kategori;
use App\Models\User;



class ProdukController extends Controller
{
    public function index(){
        
        $title = '';
        if(request('kategori')){
            $kategori = Kategori::firstWhere('slug', request('kategori'));
            $title = ' dalam ' . $kategori->nama_kategori;
        }

        if(request('user')){
            $user = User::firstWhere('name', request('user'));
            $title = ' dari ' . $user->name;
        }

        return view('pages\semua-produk', [
            "title" => "Semua Produk" . $title,
            "products" => produk_jualan::latest()->filter(request(['search', 'kategori', 'user']))->paginate(9)->withQueryString(),
            
        ]);
    }

    public function home(){
        return view('pages\home', [
            "title" => "Home",
            "products" => produk_jualan::latest('id')->get(),
            "bestseller_products" => produk_jualan::with(['user', 'kategori'])->inRandomOrder()->limit(7)->get(),
            "featured_products" => produk_jualan::with([ 'kategori'])->inRandomOrder()->limit(10)->get(),
            "kategori" => Kategori::with(['products'])->get(),
        ]);
    }

    public function show(produk_jualan $product){

        return view('pages\detail-produk', [
            "title" => "Detail Produk",
            "products" => $product,
        ]);
    }
}


