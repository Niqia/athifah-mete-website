<li class="nav-item dropdown">
    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px;">
        Semua Produk
        <i class="fa-solid fa-chevron-down"></i>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a class="dropdown-item {{ ($title === 'Makanan Khas Sultra') ? 'active' : '' }}" href="/makanan-khas-sultra">Makanan Khas Sultra</a></li>
        <li><a class="dropdown-item {{ ($title === 'Kerajinan Khas Sultra') ? 'active' : '' }}" href="/kerajinan-khas-sultra">Kerajinan Khas Sultra</a></li>
    </ul>
</li>

<section id="dekorasi" class="p-5 m-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-5 article justify-content-center" style="background-color: #f8ba8c; color: #fff; padding-top: 70px;">
                <h4 style="font-family: 'Calistoga', cursive; font: size 28px; padding-top: 40px;">Manfaat Kacang Mete</h4>
                <br>
                <p style="font-family:'Cabin', sans-serif;">Kacang mete mengandung asam lemak tak jenuh tunggal dan ganda. Kandungan keduanya dapat membantu Anda menurunkan kadar kolesterol jahat (LDL) dan trigliserida dalam darah. Kadar kolesterol jahat dan trigliserida yang relatif rendah dapat mengurangi risiko penyakit kardiovaskuler, stroke, dan serangan jantung.</p>
                <br>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn" type="button" style="background-color: #fff; color:#28AE3D;">Lihat olahan kreatif mete</button>
                </div> 
            </div>
            <div class="col-md-6" style="display: flex; justify-content:center;">
                <img src="img/kacang mete.jpg" alt="" style="width: 578; height:526" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- produk unggulan -->
<div class="d-flex justify-content-center align-items-center mb-4">
    <a href="/detail-produk/{{$product->slug}}"><img src="img/comet.jpg" alt="" class="c-img"></a>
</div>
<div class="desc" style="padding-left: 20px;">
    <div class="harga d-flex mb-4">
        <span>Rp {{$product->harga}},-</span>
    </div>
        <h4 class="nama-produk"><a href="/detail-produk/{{$product->slug}}">{{$product->nama_produk}} {{$product->ukuran}}</a></h4>
</div>
<!-- produk unggulan -->


<!-- seeder -->

use App\Models\User;
use App\Models\produk_jualan;
use App\Models\Kategori;

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
            'deskripsi' => '<br><p>Komposisi : Kacang mete, kacang tanah, sereal jagung, dan coklat batang.</p><p>Ukuran lain yang tersedia dan harga masing-masing:</p><ul><li>- 200gr Rp 20.000,-</li><li>- 1 tempat Rp 50.000,-</li>',
        ]);