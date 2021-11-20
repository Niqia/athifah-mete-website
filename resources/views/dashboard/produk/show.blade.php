@extends('dashboard.dashboard_layouts.dashboard_main')

@section('halaman')

    <!-- Start Detail Produk -->
    <section id="detail-produk" class="py-3 mb-5">
            <div class="container">
                <div class="row">
                    <div class=" d-flex bd-highlight mb-3">
                        
                        <a href="/dashboard/produk_jualan" class="btn bg-success me-auto p-2 bd-highlight"><span data-feather="arrow-left"></span>Kembali</a>
                        <a href="" class="btn bg-warning p-2 bd-highlight"><span data-feather="edit"></span>Edit</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="" class="btn bg-danger p-2 bd-highlight"><span data-feather="x-circle"></span>Delete</a>
                    </div>
                    

                    <!-- Start Kolom Kanan -->
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ asset('img/Comet 100gr .jpg') }}" alt="" class="big-img img-fluid">
                    </div>
                    <!-- End Kolom Kanan -->

                    <!-- Start Kolom Kiri -->
                    <div class="col-sm-6 align-self-center">
                                
                            <h5 class="col-sm-6" style="font-size: 40px;">{{$products->nama_produk}} {{$products->ukuran}}</h5>
                                
                            <small>By: <a href="">{{$products->user->name}}</a></small>
                            <br>
                            <small>Kategori: <a href="">{{ $products->Kategori->nama_kategori}}</a></small>
                                
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
                                                <span>Rp {{ $products->harga }},-</span>
                                            </div>
                                        
                                <!-- end harga produk -->

                            <hr class="mt-0 mb-5">

                            <!-- Start Deskripsi Produk -->
                            <div class="deskripsi-produk">
                                <h4>Deskripsi Produk:</h4>
                                {!! $products->deskripsi !!}
                            </div>
                            <!-- End Deskripsi Produk -->

                
                       
                    </div>
                    <!-- End Kolom Kiri -->
                </div>
            </div>
        </section>
    <!-- End Detail Produk -->

@endsection