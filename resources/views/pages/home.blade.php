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
                                <button class="btn" type="button" style="background-color: #fff; color:#28AE3D;">Lihat olahan kreatif mete</button>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <img src="img/kacang mete.jpg" alt="" style="width: 578; height:526" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
    <!-- End Fun Fact -->

    <!-- Start Bestseller -->
        <section id="bestseller" class="py-3 mb-5 m-4">
            <div class="container py-5">
                <h3 class="text-center m-3" style="font-family: 'Calistoga', cursive; font: size 28px;">Bestseller Kami</h3>

                <!-- Start Bestseller Owl Carousel -->
                    <div class="owl-carousel">
                        <div class="item py-2">
                            <div class="product" style="width: 210px;">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <a href="#"><img src="img/songket tolaki modern.jpg" alt="" class="c-img img-fluid"></a>
                                </div>
                                <div style="padding: 24px;">
                                    <div class="harga d-flex mb-4">
                                        <span>Rp 240.000,-</span>
                                    </div>
                                    <h6 class="nama-produk">Kain Songket Tolaki Modern</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item py-2">
                            <div class="product" style="width: 210px;">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <a href="#"><img src="img/songket tolaki.jpg" alt="" class="c-img"></a>
                                </div>
                                <div style="padding: 24px;">
                                    <div class="harga d-flex mb-4">
                                        <span>Rp 250.000,-</span>
                                    </div>
                                    <h6 class="nama-produk">Kain Songket Tolaki</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item py-2">
                            <div class="product" style="width: 210px;">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <a href="#"><img src="img/comet.jpg" alt="" class="c-img"></a>
                                </div>
                                <div style="padding: 24px;">
                                    <div class="harga d-flex mb-4">
                                        <span>Rp 12.000,-</span>
                                    </div>
                                    <h6 class="nama-produk">Cokelat Mente</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item py-2">
                            <div class="product" style="width: 210px;">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <a href="#"><img src="img/comet.jpg" alt="" class="c-img"></a>
                                </div>
                                <div style="padding: 24px;">
                                    <div class="harga d-flex mb-4">
                                        <span>Rp 12.000,-</span>
                                    </div>
                                    <h6 class="nama-produk">Cokelat Mente</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item py-2">
                            <div class="product"style="width: 210px;">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <a href="#"><img src="img/comet.jpg" alt="" class="c-img"></a>
                                </div>
                                <div style="padding: 24px;">
                                    <div class="harga d-flex mb-4">
                                        <span>Rp 12.000,-</span>
                                    </div>
                                    <h6 class="nama-produk">Cokelat Mente</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item py-2">
                            <div class="product" style="width: 210px;">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <a href="#"><img src="img/comet.jpg" alt="" class="c-img"></a>
                                </div>
                                <div style="padding: 24px;">
                                    <div class="harga d-flex mb-4">
                                        <span>Rp 12.000,-</span>
                                    </div>
                                    <h6 class="nama-produk">Cokelat Mente</h6>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                <!-- End Bestseller Owl Carousel -->

            </div>
        </section>
    <!-- End Bestseller -->

    <!-- Start Produk Terbaru -->
        <section id="detail-produk" class="py-3 mb-5 m-4">
            <div class="container">
                <h3 class="text-center m-3" style="font-family: 'Calistoga', cursive; font: size 28px;">Produk Terbaru</h3>
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
    <!-- End Produk Terbaru -->

    <!-- Start Produk Unggulan -->
        <section id="produk-unggulan" class="py-3 mb-5 m-4">
            <div class="container">
                <h3 class="text-center m-3" style="font-family: 'Calistoga', cursive; font: size 28px;">Produk Unggulan</h3>
                <div id="filters" class="button-group">
                    <button class="btn is-checked" data-filter="*"> Semua Produk</button>
                    <button class="btn" data-filter=".kerajinan"> Kerajinan </button>
                    <button class="btn" data-filter=".makanan"> Makanan </button>
                </div>

                <div class="grid">
                    <div class="grid-item makanan border">
                        <div class="item py-2" style="width: 200px;">
                            <!-- <div class="product"> -->
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <a href="#"><img src="img/comet.jpg" alt="" class="c-img"></a>
                                </div>
                                <div style="padding: 24px;">
                                    <div class="harga d-flex">
                                        <span>Rp 12.000,-</span>
                                    </div>
                                    <h6 class="nama-produk">Cokelat Mente</h6>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="grid-item kerajinan border">
                        <div class="item py-2" style="width: 200px;">
                            <!-- <div class="product"> -->
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <a href="#"><img src="img/songket tolaki modern.jpg" alt="" class="c-img"></a>
                                </div>
                                <div style="padding: 24px;">
                                    <div class="harga d-flex">
                                        <span>Rp 240.000,-</span>
                                    </div>
                                    <div>
                                        <h6 class="nama-produk">Kain Songket Tolaki Modern</h6>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="grid-item kerajinan border">
                        <div class="item py-2" style="width: 200px;">
                            <!-- <div class="product"> -->
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <a href="#"><img src="img/songket tolaki.jpg" alt="" class="c-img"></a>
                                </div>
                                <div style="padding: 24px;">
                                    <div class="harga d-flex">
                                        <span>Rp 250.000,-</span>
                                    </div>
                                    <div>
                                        <h6 class="nama-produk">Kain Songket Tolaki</h6>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </section>
    <!-- End Produk Unggulan -->

    
        
    



    

@endsection


