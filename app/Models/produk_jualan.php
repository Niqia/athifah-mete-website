<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk_jualan extends Model
{
    use HasFactory;

    // protected $fillable = ['nama_produk', 'excerpt', 'ukuran', 'harga', 'deskripsi'];
    protected $guarded = ['id'];
    protected $with = ['user', 'kategori'];

    public function scopeFilter($query, array $filters){
        

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama_produk', 'like', '%' . $search . '%')
                        ->orWhere('deskripsi', 'like', '%' . $search . '%');
        });

        // condition using callback
        $query->when($filters['kategori'] ?? false, function($query, $kategori){
            return $query->whereHas('kategori', function($query) use ($kategori){
                $query->where('slug', $kategori);
            });
        });
        
        // condition using arrow function
        $query->when($filters['user'] ?? false, fn($query, $user) =>
            $query->whereHas('user', fn($query) =>
                $query->where('name', $user)
            )
        );
    
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
