
@extends('layouts.main')

@section('halaman')  

    <h1 class="mb-5 mt-5 text-center" style="font-family: 'Calistoga', cursive;">Lihat Produk Berdasarkan Kategori</h1>

        <section id="pilihan-kategori" class="p-5 m-5">
            <div class="container">
                <div class="row">
                    @foreach ($pilihanKategori as $pk)
                        <div class="col-md-6 article justify-content-center" style="padding-top: 70px;">
                        <div class="card">
                            <a href="/semua-produk?kategori={{ $pk->slug }}"><img src="{{ asset('img/athifah (1).jpg') }}" class="card-img-top" alt="..."></a>
                                <div class="card-body text-center">
                                    <h2><a href="/semua-produk?kategori={{ $pk->slug }}">{{$pk->nama_kategori}}</a></h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        
    

@endsection