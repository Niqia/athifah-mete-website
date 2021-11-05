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
                        <h5 class="col-sm-6" style="font-size: 40px;">Cokelat Mete 100gr</h5>
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
                                
                                        <div class="harga d-flex" style="font-size: 35px;"> 
                                            <span>Rp 17.000,-</span>
                                        </div>
                                    
                            <!-- end harga produk -->

                         <hr class="mt-0 mb-5">

                        <!-- Start Deskripsi Produk -->
                        <div class="deskripsi-produk">
                            <h4>Deskripsi Produk:</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor, ante sit amet rutrum tempor, ante augue posuere ex, eget pharetra risus lacus non arcu. Proin id enim gravida felis pretium semper. Curabitur molestie malesuada magna, et facilisis erat maximus at. Duis metus arcu, aliquam at ex non, ultrices placerat enim. Donec bibendum luctus ante, sit amet pulvinar enim tristique eget. Suspendisse et laoreet ipsum. Pellentesque interdum quis ipsum quis volutpat. Vestibulum rhoncus eros nec dignissim posuere. Duis nec metus orci. Mauris sagittis, velit in congue congue, felis mauris mollis metus, eget facilisis lectus erat consequat ligula. Curabitur rutrum venenatis rutrum.</p>
                        </div>
                        <!-- End Deskripsi Produk -->

                        <!-- Start Tombol Pesan Sekarang -->
                            <div class="form-row pt-4 font-size-16">
                                <div class="col">
                                    <button type="submit" class="btn btn-warning form-control">Pesan Sekarang</button>
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