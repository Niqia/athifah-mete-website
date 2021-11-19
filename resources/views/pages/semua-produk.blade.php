@extends('layouts.main')

@section('halaman')  

    
            <section id="semua-produk" class="p-5 m-5">
                <div class="container">
                    <h1 class="mb-5 mt-5">{{$title}}</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/semua-produk" class="d-flex">
                                    @if (request('kategori'))
                                        <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                                    @endif
                                    @if (request('user'))
                                        <input type="hidden" name="user" value="{{ request('user') }}">
                                    @endif
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Cari" name="search" value="{{request('search')}}">
                                        <button class="btn btn-outline-secondary" type="submit" style="background-color: #28AE3D; color: #fff">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($products->count())
                            <div class="row" >
                                @foreach ($products as $product)
                                    <!-- <div class="col "> -->
                                        <div class="card" style="width: 18rem; margin: 25px;">
                                            <a href="/detail-produk/{{$product->slug}}"><img src="{{ asset('img/athifah (1).jpg') }}" class="card-img-top img-fluid float-md-end" alt="..." style="padding: 20px;"></a>
                                            <div class="card-body" style="overflow-wrap: break-word;">
                                                <h5 class="card-title" style="color: #f8ba8c;">Rp {{ $product->harga }},-</h5>
                                                <p class="card-title">{{$product->excerpt}}</p>
                                                <h4 class="card-title"><a href="/detail-produk/{{$product->slug}}">{{$product->nama_produk}} {{$product->ukuran}}</a></h4>
                                                <!-- <a href="/detail-produk/{{$product->slug}}" class="btn" style="background-color: #f8ba8c; color:#00634b;">Lihat Selengkapnya</a> -->
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                @endforeach
                            </div>
                        @else
                            <p>No product to show</p>
                        @endif

                        <div class="d-flex justify-content-center">
                            {{$products->links()}}
                        </div>
                </div>
            </section>
    

@endsection