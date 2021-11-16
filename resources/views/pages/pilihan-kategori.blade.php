
@extends('layouts.main')

@section('halaman')  

    <h1 class="mb-5 mt-5 text-center" style="font-family: 'Calistoga', cursive;">Lihat Produk Berdasarkan Kategori</h1>

    @foreach ($pilihanKategori as $pk)

        <section id="tentang-kami" class="p-5 m-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 article justify-content-center" style="padding-top: 70px;">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h2><a href="/{{ $pk->slug }}">{{$pk->nama_kategori}}</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    @endforeach

@endsection