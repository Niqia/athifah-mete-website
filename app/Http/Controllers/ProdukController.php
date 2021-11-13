<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk_jualan;


class ProdukController extends Controller
{
    public function index(){
        
        return view('pages\semua-produk', [
            "title" => "Semua Produk",
            "products" => produk_jualan::all()
        ]);
    }

    public function show($slug){

        return view('pages\detail-produk', [
            "title" => "Detail Produk",
            "products" => produk_jualan::find($slug)
        ]);
    }
}


