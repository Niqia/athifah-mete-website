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