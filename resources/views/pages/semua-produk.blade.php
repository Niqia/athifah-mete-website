

@extends('layouts.main')

@section('halaman')  

@foreach ($products as $product)
    <div class="card" style="width: 18rem; margin: 25px;">
    <img src="..." class="card-img-top" alt="..." style="padding: 20px;">
    <div class="card-body">
        <h5 class="card-title" style="color: #f8ba8c;">Rp {{ $product["harga-produk"] }},-</h5>
        <h4 class="card-title">{{$product["nama-produk"]}} {{$product["ukuran"]}}</h4>
        <a href="/detail-produk/{{$product ['slug']}}" class="btn" style="background-color: #f8ba8c; color:#00634b;">Lihat Selengkapnya</a>
    </div>
    </div>
@endforeach

@endsection