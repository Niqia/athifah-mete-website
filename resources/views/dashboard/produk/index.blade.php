@extends('dashboard.dashboard_layouts.dashboard_main')

@section('halaman')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produk Athifah Oleh-Oleh Khas Kendari</h1>
    </div>

    <hr>

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif

    <div class="table-responsive">

        <a href="/dashboard/produk_jualan/create" class="btn btn-primary mb-4">Tambahkan Produk</a>

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
                            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                        </td>
                    </tr>
                @endforeach
          </tbody>
        </table>
      </div>
@endsection