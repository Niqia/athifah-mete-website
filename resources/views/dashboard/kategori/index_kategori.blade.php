@extends('dashboard.dashboard_layouts.dashboard_main')

@section('halaman')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengaturan Kategori</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif

    <div class="table-responsive">

        <a href="/dashboard/kategori/create" class="btn btn-primary mb-4">Buat Kategori Baru</a>

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Kategori</th>
              <th scope="col">Slug</th>
              <!-- <th scope="col">Deskripsi</th> -->
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
                @foreach ($kategori as $k)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $k->nama_kategori }}</td>
                        <td>{{ $k->slug }}</td>
                        <td>
                            <a href="/dashboard/kategori/{{$k->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                            <a href="/dashboard/kategori/{{$k->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                              <form action="/dashboard/kategori/{{$k->slug}}" method="post" class="d-inline">
                                  @method('delete')
                                  @csrf
                                  <button class="badge bg-danger border-0" onclick="return confirm('Hapus Produk?')"><span data-feather="x-circle"></span></button>
                              </form>
                        </td>
                    </tr>
                @endforeach
          </tbody>
        </table>
      </div>
@endsection