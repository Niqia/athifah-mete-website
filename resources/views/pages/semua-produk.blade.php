

@extends('layouts.main')

@section('halaman')  

@foreach ($products as $product)
    <div class="card" style="width: 18rem; margin: 25px;">
    <img src="..." class="card-img-top" alt="..." style="padding: 20px;">
    <div class="card-body">
        <h5 class="card-title" style="color: #f8ba8c;">Rp {{ $product["harga"] }},-</h5>
        <h4 class="card-title"><a href="/detail-produk/{{$product->id}}">{{$product->nama_produk}} {{$product->ukuran}}</a></h4>
        <p class="card-title">{{$product->excerpt}}</p>
        <a href="/detail-produk/{{$product->id}}" class="btn" style="background-color: #f8ba8c; color:#00634b;">Lihat Selengkapnya</a>
    </div>
    </div>
@endforeach

@endsection