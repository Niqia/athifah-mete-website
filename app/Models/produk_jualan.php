<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk_jualan extends Model
{
    use HasFactory;

    // protected $fillable = ['nama_produk', 'excerpt', 'ukuran', 'harga', 'deskripsi'];
    protected $guarded = ['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
