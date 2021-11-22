@extends('layouts.main')

@section('halaman')
    <!-- Start Bootstrap Carousel -->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/img 1.jpg" class="d-block w-100" alt="..." width="1519px" height="505px">
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                <img src="img/img 2.jpg" class="d-block w-100" alt="..." width="1519px" height="505px">
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                <img src="img/img 3.jpg" class="d-block w-100" alt="..." width="1519px" height="505px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <!-- Start Bootstrap Carousel -->

    <!-- Start Bestseller -->
        <section id="bestseller" class="py-3 mb-5 m-4">
            <div class="container py-5">
                <h3 class="text-center m-3" style="font-family: 'Calistoga', cursive; font: size 28px;">Bestseller Kami</h3>

                <!-- Start Bestseller Owl Carousel -->
                    <div class="owl-carousel">
                        @foreach($bestseller_products as $product)
                            <div class="item py-2">
                                <div class="product" style="width: 210px;">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <a href="/detail-produk/{{$product->slug}}">
                                            @if($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{$product->slug}}" class="rounded mx-auto d-block c-img border-0 img-fluid">
                                            @else
                                                <img src="{{ asset('img/athifah (1).jpg') }}" alt="{{$product->slug}}" class="rounded mx-auto d-block c-img border-0 img-fluid">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="desc" style="padding-left: 20px; padding-bottom: 1em; ">
                                        <div class="harga d-flex mb-3">
                                            <span>Rp {{$product->harga}},-</span>
                                        </div>
                                            <h4 class="nama-produk"><a href="/detail-produk/{{$product->slug}}" style="white-space: initial;">{{$product->nama_produk}} {{$product->ukuran}}</a></h4>
                                            <!-- <a href="/detail-produk/{{$product->slug}}" class="btn" style="background-color: #f8ba8c; color:#00634b; white-space: initial;">Lihat Selengkapnya</a> -->
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
                <!-- End Bestseller Owl Carousel -->

            </div>
        </section>
    <!-- End Bestseller -->

    <!-- Start Fun Fact -->
        <section id="dekorasi" class="p-5 m-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 p-5 article justify-content-center" style="background-color: #f8ba8c; color: #fff; padding-top: 70px;">
                            <h4 style="font-family: 'Calistoga', cursive; font: size 28px; padding-top: 40px;">Manfaat Kacang Mete</h4>
                            <br>
                            <p style="font-family:'Cabin', sans-serif;">Kacang mete mengandung asam lemak tak jenuh tunggal dan ganda. Kandungan keduanya dapat membantu Anda menurunkan kadar kolesterol jahat (LDL) dan trigliserida dalam darah. Kadar kolesterol jahat dan trigliserida yang relatif rendah dapat mengurangi risiko penyakit kardiovaskuler, stroke, dan serangan jantung.</p>
                            <br>
                            <div class="d-grid gap-2 d-md-block">
                                <a href="#bestseller" class="btn" style="background-color: #fff; color:#28AE3D;">Lihat olahan kreatif mete</a>
                            </div> 
                        </div>
                        <div class="col-md-6" style="display: flex; justify-content:center;">
                            <img src="img/kacang mete.jpg" alt="" style="width: 578; height:526" class="img-fluid float-md-end">
                        </div>
                    </div>
                </div>
            </section>
    <!-- End Fun Fact -->

    <!-- Start Produk Terbaru -->

        <section id="produk-terbaru" class="py-3 mb-5 m-4">
                <div class="container">
                    <h3 class="text-center m-3" style="font-family: 'Calistoga', cursive; font: size 28px;">Produk Terbaru</h3>
                    <div class="row">
                        @if ($products->count())
                            <!-- Start Kolom Kanan -->
                            <div class="col-sm-6 align-self-center">
                                <a href="/detail-produk/{{$products[0]->slug}}">
                                    @if($products[0]->image)
                                        <img src="{{ asset('storage/' . $products[0]->image) }}" alt="{{$products[0]->slug}}" class="big-img img-fluid">
                                    @else
                                        <img src="{{ asset('img/athifah (1).jpg') }}" alt="{{$products[0]->slug}}" class="big-img img-fluid">
                                    @endif
                                </a>
                            </div>
                            <!-- End Kolom Kanan -->

                            <!-- Start Kolom Kiri -->
                            
                            <div class="col-sm-6 align-self-center">
                                <h5 class="col-sm-6" style="font-size: 40px;">{{ $products[0]->nama_produk}}</h5>
                                <small>By: <a href="/semua-produk?user={{$products[0]->user->name}}">{{$products[0]->user->name}}</a></small>
                                <br>
                                <small>Kategori: <a href="/semua-produk?kategori={{$products[0]->kategori->slug}}">{{ $products[0]->Kategori->nama_kategori}}</a></small>
                                    
                                    <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            
                                        </div>
                                        <p>&nbsp;&nbsp;(5)</p>
                                    </div>

                                    <!-- start harga produk -->
                                        
                                                <div class="harga d-flex" style="font-size: 35px;"> 
                                                    <span>Rp {{ $products[0]->harga }},-</span>
                                                </div>
                                            
                                    <!-- end harga produk -->

                                <hr class="mt-0 mb-5">

                                <!-- Start Deskripsi Produk -->
                                <div class="deskripsi-produk">
                                    <h4>Deskripsi Produk:</h4>
                                        {!! $products[0]->deskripsi !!}
                                </div>
                                <!-- End Deskripsi Produk -->

                                <!-- Start Tombol Pesan Sekarang -->
                                    <div class="form-row pt-4 font-size-16">
                                        <div class="col">
                                            <a href="/cara-memesan" class="btn btn-warning form-control">Pesan Sekarang</a>
                                        </div>
                                    </div>
                                <!-- End Tombol Pesan Sekarang -->

                            </div>
                            <!-- End Kolom Kiri -->
                        @else
                            <p>Tidak Ada Produk Terbaru.</p>
                        @endif
                    </div>
                </div>
            </section>

    <!-- End Produk Terbaru -->

    <!-- Start Produk Unggulan -->
        <section id="produk-unggulan" class="py-3 mb-5 m-4">
            <div class="container">
                <h3 class="text-center m-3" style="font-family: 'Calistoga', cursive; font: size 28px;">Produk Unggulan</h3>
                <div id="filters" class="button-group">
                    <button class="btn is-checked" data-filter="*"> Semua Produk</button>
                        @foreach($kategori as $k )
                            <button class="btn" data-filter=".{{$k->slug}}"> {{$k->nama_kategori}} </button>
                        @endforeach
                    <!-- <button class="btn" data-filter=".kerajinan"> Kerajinan </button>
                    <button class="btn" data-filter=".makanan"> Makanan </button> -->
                </div>

                <div class="grid">
                    @foreach($featured_products as $product )
                        <div class="grid-item border {{ ($product['kategori_id'] === 1) ? 'makanan-khas-sultra' : 'kerajinan-khas-sultra' }}">
                            <div class="item py-2" style="width: 210px;">
                                <!-- <div class="product"> -->
                                    <div class="d-flex justify-content-center align-items-center mb-4" style="width: 100%;">
                                        <a href="/detail-produk/{{$product->slug}}">
                                            @if($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{$product->slug}}" class=" rounded mx-auto d-block c-img border-0 img-fluid">
                                            @else
                                                <img src="{{ asset('img/athifah (1).jpg') }}" alt="{{$product->slug}}" class="rounded mx-auto d-block c-img border-0 img-fluid">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="desc" style="padding-left: 20px;">
                                        <div class="harga d-flex mb-4">
                                            <span>Rp {{$product->harga}},-</span>
                                        </div>
                                            <h4 class="nama-produk"><a href="/detail-produk/{{$product->slug}}">{{$product->nama_produk}} {{$product->ukuran}}</a></h4>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    @endforeach
            
                </div>

            </div>
        </section>
    <!-- End Produk Unggulan -->

@endsection


