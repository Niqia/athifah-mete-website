<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;


class ProdukController extends Controller
{
    public function index(){
        
        return view('pages\semua-produk', [
            "title" => "Semua Produk",
            "products" => ProdukModel::all()
        ]);
    }

    public function show($slug){

        return view('pages\detail-produk', [
            "title" => "Detail Produk",
            "products" => ProdukModel::find($slug)
        ]);
    }
}


