@extends('layouts.main')

@section('halaman')   

    <!-- Start Detail Produk -->
        <section id="detail-produk" class="py-3 mb-5">
            <div class="container">
                <div class="row">
                    <!-- Start Kolom Kanan -->
                    <div class="col-sm-6 align-self-center">
                        <img src="img/Comet 100gr .jpg" alt="" class="big-img img-fluid">
                    </div>
                    <!-- End Kolom Kanan -->

                    <!-- Start Kolom Kiri -->
                    <div class="col-sm-6 align-self-center">
                       
                            <h5 class="col-sm-6" style="font-size: 40px;">{{$products["nama-produk"]}} {{$products["ukuran"]}}</h5>
                            <small>By Athifah Mete Kendari</small>
                                
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
                                    
                                            <div class="harga d-flex" style="font-size: 35px; font-family: 'Calistoga', cursive; "> 
                                                <span>Rp {{ $products["harga-produk"] }},-</span>
                                            </div>
                                        
                                <!-- end harga produk -->

                            <hr class="mt-0 mb-5">

                            <!-- Start Deskripsi Produk -->
                            <div class="deskripsi-produk">
                                <h4>Deskripsi Produk:</h4>
                                <p>{{ $products["deskripsi-produk"] }}</p>
                            </div>
                            <!-- End Deskripsi Produk -->

                            <!-- Start Tombol kembali -->
                                <div class="form-row pt-4 font-size-16">
                                    <div class="col">
                                        <a href="/semua-produk" class="btn btn-warning form-control">Kembali Ke semua Produk</a>
                                    </div>
                                </div>
                            <!-- End Tombol kembali -->
                            <!-- Start Tombol Pesan Sekarang -->
                                <div class="form-row pt-4 font-size-16">
                                    <div class="col">
                                    <a href="/cara-memesan" class="btn btn-warning form-control">Pesan Sekarang</a>
                                    </div>
                                </div>
                            <!-- End Tombol Pesan Sekarang -->
                       
                    </div>
                    <!-- End Kolom Kiri -->
                </div>
            </div>
        </section>
    <!-- End Detail Produk -->

@endsection