<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkModel 
{
    // baris dibawah ini merupakan data yang akan berada di database
    private static $produk =
    [
        [
            "nama-produk" => "Mete Goreng",
            "slug" => "mete-goreng",
            "kategori" => "Makanan Khas Sultra",
            "ukuran" => "150 gr",
            "harga-produk" => "Rp 30.000,-",
            "deskripsi-produk" => "Tersedia dalam 5 varian rasa : Rasa original/asin, rasa manis, rasa gula aren dan rasa bawang. 
            Ukuran yang tersedia: 
                - 150 gr Rp 30.000,-
                - 350 gr RP 70.000,-
                - 500 gr Rp 95.000,-"
        ],
        [
            "nama-produk" => "Keripik Mete",
            "slug" => "keripik-mete",
            "kategori" => "Makanan Khas Sultra",
            "ukuran" => "200 gr",
            "harga-produk" => "Rp 17.000,-",
            "deskripsi-produk" => "Tersedia dalam berbagai ukuran: 
            - 200 gr Rp 17.000,-
            - 350 gr Rp 29.000,-
            - 500 gr Rp 37.000,- "
        ],
    ];

    // fungsi untuk menampilkan semua produk
    public static function all(){ 
        return collect(self::$produk);
    }

    // fungsi untuk mencari produk berdasarkan slug (sebagai parameter) yang ada di produk
    public static function find($slug){

        $products = static::all();
        // $detail_produk = [];

        // foreach($products as $product){
        //     if($product["slug"] === $slug){
        //         $detail_produk = $product;
        //     }
        // }

        return $products->firstWhere('slug', $slug);
    }
}
