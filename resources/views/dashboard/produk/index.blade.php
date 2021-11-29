@extends('dashboard.dashboard_layouts.dashboard_main')

@section('halaman')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produk Athifah Oleh-Oleh Khas Kendari</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif

    <div class="table-responsive">

        <a href="/dashboard/produk_jualan/create" class="btn btn-primary mb-4">Tambahkan Produk</a>

        <form action="/dashboard/produk_jualan" class="d-flex">
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

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Kategori</th>
              <th scope="col">Ukuran</th>
              <th scope="col">Harga</th>
              <!-- <th scope="col">Deskripsi</th> -->
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @if($products->count())
                @foreach ($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $product->nama_produk }}</td>
                        <td>{{ $product->kategori->nama_kategori }}</td>
                        <td>{{ $product->ukuran }}</td>
                        <td>Rp {{ $product->harga }},-</td>
                        <!-- <td>{{ $product->deskripsi}}</td> -->
                        <td>
                            <a href="/dashboard/produk_jualan/{{$product->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                            <a href="/dashboard/produk_jualan/{{$product->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                              <form action="/dashboard/produk_jualan/{{$product->slug}}" method="post" class="d-inline">
                                  @method('delete')
                                  @csrf
                                  <button class="badge bg-danger border-0" onclick="return confirm('Hapus Produk?')"><span data-feather="x-circle"></span></button>
                              </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <p>No product to show</p>
                @endif
          </tbody>
        </table>
      </div>

      
@endsection