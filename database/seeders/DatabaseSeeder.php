<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\produk_jualan;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Athifah Oleh-Oleh Khas Kendari',
            'username' => 'athifahmetekendari',
            'email' => 'athifahmete78@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        
        Kategori::create([
            'nama_kategori' => 'Makanan Khas Sultra',
            'slug' => 'makanan-khas-sultra',
        ]);
        
        Kategori::create([
            'nama_kategori' => 'Kerajinan Khas Sultra',
            'slug' => 'kerajinan-khas-sultra',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kain Serimbit Super',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kain-serimbit-super',
            'harga' => '800.000',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kain Serimbit Super + Dompet',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kain-serimbit-super-plus-dompet',
            'harga' => '9.000.000',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kain Sarung Kendari',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kain-sarung-kendari',
            'harga' => '80.000',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kain Double Tenun Tolaki',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kain-double-tenun-tolaki',
            'harga' => '100.000',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kain Double Tenun Buton',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kain-double-tenun-buton',
            'harga' => '100.000',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kain Double Tenun Bombana',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kain-double-tenun-bombana',
            'harga' => '140.000',
        ]);
        
        produk_jualan::create([
            'nama_produk' => 'Kain Obama Kendari',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kain-obama-kendari',
            'harga' => '235.000',
        ]);
        
        produk_jualan::create([
            'nama_produk' => 'Kain Songket Tolaki',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kain-songket-tolaki',
            'harga' => '250.000',
        ]);
        
        produk_jualan::create([
            'nama_produk' => 'Kain Songket Tolaki Modern',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kain-songket-tolaki-modern',
            'harga' => '250.000',
        ]);
        
        produk_jualan::create([
            'nama_produk' => 'Gantungan Kunci Kerang Motif SULTRA',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'gantungan-kunci-kerang-motif-sultra',
            'excerpt' => 'Tersedia dalam 2 bahan',
            'harga' => '15.000',
            'deskripsi' => '<p>Tersedia dalam 2 bahan</p><ul><li>- Kaca (fiber) Rp 10.000,-</li><li>- kerang Rp 15.000,-</li><ul>',
        ]);
        
        produk_jualan::create([
            'nama_produk' => 'Kaos Cotton Combed 24S',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kaos-cotton-combed-24s',
            'harga' => '90.000',
        ]);
        
        produk_jualan::create([
            'nama_produk' => 'Kaos Dewasa',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kaos-dewasa',
            'harga' => '80.000',
        ]);
        
        produk_jualan::create([
            'nama_produk' => 'Kaos Sweater',
            'kategori_id' => 2,
            'user_id' => 1,
            'slug' => 'kaos-sweater',
            'harga' => '145.000',
        ]);
        

        produk_jualan::create([
            'nama_produk' => 'Pia Mete',
            'slug' => 'pia-mete',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => '200gr',
            'harga' => '14.000',
            'deskripsi' => '<br><p>Komposisi : Minyak nabati,Kacang Hijau, Telur, Terigu.</p><p>Ukuran lain yang tersedia: </p><ul><li>200gr RP.14.000</li><li>Dus RP.33.000</li><li>Toples RP.39.000</li>',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kue Baruasa Mete Gula Merah',
            'slug' => 'kue-baruasa-mete-gula-merah',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => '180gr',
            'harga' => '15.000',
            'deskripsi' => '<br><p>Ukuran lain yang tersedia: </p><ul><li>640gr RP.29.000</li><li>1kg RP.40.000</li>',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kue Baruasa',
            'slug' => 'kue-baruasa',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => '200gr',
            'harga' => '14.000',
            'deskripsi' => '<br><p>Ukuran lain yang tersedia: </p><ul><li>200gr RP.14.000</li><li>560gr RP.24.000</li><li>1kg RP.32.000</li>',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kue Brownies Mete',
            'slug' => 'kue-brownies-mete',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => 'Kecil',
            'harga' => '17.000',
            'deskripsi' => '<br><p>Ukuran lain yang tersedia: </p><ul><li>Ukuran Kecil/plastik mika RP.17.000</li><li>Ukuran Dus RP.39.000</li>',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Bagea Mete',
            'slug' => 'bagea-mete',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => 'Kecil',
            'harga' => '10.000',
            'deskripsi' => '<br><p>Ukuran lain yang tersedia: </p><ul><li>Ukuran Kecil RP.10.000</li><li>Ukuran Sedang RP.26.000</li><li>Ukuran Besar RP.36.000</li>',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kopi Kawahaku',
            'slug' => 'kopi-kawahaku',
            'user_id' => 1,
            'kategori_id' => 1,
            'harga' => '32.000',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kopi Tolaki',
            'slug' => 'kopi-tolaki',
            'user_id' => 1,
            'kategori_id' => 1,
            'harga' => '23.000',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Chips SAGUKU',
            'slug' => 'chip-saguku',
            'user_id' => 1,
            'kategori_id' => 1,
            'harga' => '20.000',
            'deskripsi' => '<br><p>Cemilan Khas Sulawesi Tenggara yang terbuat dari olaham SAGU dan COKLAT.</p>',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Coklat Anoa Kendari',
            'slug' => 'coklat-anoa-kendari',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => 'Kecil',
            'harga' => '20.000',
            'deskripsi' => '<br><p>Ukuran lain yang tersedia: </p><ul><li>Cokelat Anoa Kecil RP.15.000</li><li>Cokelat Anoa Besar RP.30.000</li>',
            
        ]);

        produk_jualan::create([
            'nama_produk' => 'Crispy Brownies SAGUKU',
            'slug' => 'crispy-brownies-saguku',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => '70gr',
            'harga' => '20.000',
            'deskripsi' => '<br><p>Cemilan Khas Sulewesi tenggara yang terbuat dari olahan SAGU, METE, dan COKLAT.</p>',
            
        ]);

        produk_jualan::create([
            'nama_produk' => 'Madu Latoma SULTRA',
            'slug' => 'madu-latoma-sultra',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => '100ml',
            'harga' => '35.000',
            'deskripsi' => '<br><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>100ml Rp 35.000,-</li><li>270ml Rp 75.000,-</li><li>400ml Rp 110.000,-</li><li>570ml Rp 150.000,-</li>',
            
        ]);

        produk_jualan::create([
            'nama_produk' => 'Teri Kacang Mete',
            'slug' => 'teri-kacang-mete',
            'user_id' => 1,
            'kategori_id' => 1,
            'harga' => '37.000',
            
        ]);

        produk_jualan::create([
            'nama_produk' => 'Sambal Teri Asap Kaholeo',
            'slug' => 'sambal-teri-asap-kaholeo',
            'user_id' => 1,
            'kategori_id' => 1,
            'harga' => '45.000',
            
        ]);

        produk_jualan::create([
            'nama_produk' => 'Terasi Kendari Bubuk',
            'slug' => 'terasi-kendari-bubuk',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => '170 gr',
            'harga' => '17.000',
            
        ]);

        produk_jualan::create([
            'nama_produk' => 'Mete Paket Biru Isi 10',
            'slug' => 'mete-paket-biru',
            'user_id' => 1,
            'kategori_id' => 1,
            'harga' => '340.000',
            'deskripsi' => '<p>Mete goreng 5 rasa yang dibungkus menjadi 1 dalam Mete Paket Biru khas toko Athifah. Dengan kemasan yang menarik, mudah dibawa, dan berkualitas Mete Paket Biru menawarkan 5 varian mete goreng yaitu rasa asin, manis, disko, gula aren, dan bawang putih dimana dalam 1 paket mete biru setiap varian rasa terdapat 2 bungkus mete goreng. Cocok untuk menjadi buah tangan dari sulawesi tenggara.</p>',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Mete Paket Hitam Isi 5',
            'slug' => 'mete-paket-hitam',
            'user_id' => 1,
            'kategori_id' => 1,
            'harga' => '215.000',
            'deskripsi' => '<p>Paket mete isi 5 rasa dengan varian rasa berbeda. Ada rasa Manis, Asin (original), bawang, gula aren, dan disko. Sudah di paket menjadi satu.</p>',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Teng-Teng Mete',
            'slug' => 'teng-teng-mete',
            'user_id' => 1,
            'kategori_id' => 1,
            'harga' => '18.000',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Beng-Beng Kendari',
            'slug' => 'beng-beng-kendari-toples',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => 'Toples',
            'harga' => '87.000',
            'deskripsi' => '<br><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>Pita Rp 24.000,-</li><li>Toples Rp 87.000,-</li>',
            
        ]);

        produk_jualan::create([
            'nama_produk' => 'Beng-Beng Mete',
            'slug' => 'beng-beng-mete',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => 'Pita',
            'harga' => '24.000',
            'deskripsi' => '<br><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>Pita Rp 24.000,-</li><li>Toples Rp 87.000,-</li>',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Mete Mentah Super',
            'slug' => 'mete-mentah-super',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => '500gr',
            'harga' => '83.000',
            
        ]);

        produk_jualan::create([
            'nama_produk' => 'Keripik Mete',
            'kategori_id' => 1,
            'user_id' => 1,
            'slug' => 'keripik-mete',
            'excerpt' => 'Tersedia rasa original',
            'ukuran' => '200gr',
            'harga' => '17.000',
            'deskripsi' => '<p>Tersedia rasa original</p><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>- 200gr Rp 17.000,-</li><li>- 350gr Rp 29.000,-</li><li>- 500gr Rp 37.000,-</li><ul>',
        
        ]);

        produk_jualan::create([
            'nama_produk' => 'Kacang Mete Panggang',
            'kategori_id' => 1,
            'user_id' => 1,
            'slug' => 'kacang-mete-panggang',
            'ukuran' => '400gr',
            'harga' => '75.000',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Mete Goreng',
            'kategori_id' => 1,
            'user_id' => 1,
            'slug' => 'mete-goreng',
            'excerpt' => 'Tersedia dalam 5 varian rasa',
            'ukuran' => '150gr',
            'harga' => '30.000',
            'deskripsi' => '<p>Tersedia dalam 5 varian rasa : Rasa original/asin, rasa manis, rasa gula aren dan rasa bawang.</p><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>- 150gr Rp 30.000,-</li><li>- 350gr RP 70.000,-</li><li>- 500gr Rp 95.000,-</li><ul>',
        ]);

        produk_jualan::create([
            'nama_produk' => 'Cokelat Mete (comet)',
            'slug' => 'cokelat-mete-comet',
            'user_id' => 1,
            'kategori_id' => 1,
            'ukuran' => '200gr',
            'harga' => '20.000',
            'deskripsi' => '<br><p>Komposisi : Kacang mete, kacang tanah, sereal jagung, dan coklat batang.</p><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>200gr Rp 20.000,-</li><li>Saset Rp 33.000,-</li><li>Toples Rp 50.000,-</li>',
        ]);
    }
}
