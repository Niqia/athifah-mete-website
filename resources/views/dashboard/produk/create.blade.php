@extends('dashboard.dashboard_layouts.dashboard_main')

@section('halaman')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Tambah Produk</h2>
    </div>

    <form method="post" action="/dashboard/produk_jualan">
        @csrf
        <div class="mb-3 row">
            <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_produk" name="nama_produk">
            </div>
        </div>

        
        <div class="mb-3 row">
            <label for="slug" class="col-sm-2 col-form-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="ukuran">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10" name="kategori_id">
                <select class="form-select" aria-label="Default select example">
                    @foreach ($kategori as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                    @endforeach
                    
                </select>
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="" class="form-control" id="harga">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea class="form-control" placeholder="Deskripsi" id="deskripsi" style="height: 100px"></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Upload Gambar</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Tambah </button>
    </form>

    <script>
        const nama_produk = document.querySelector('#nama_produk')
        const ukuran = document.querySelector('#ukuran')
        const slug = document.querySelector('#slug')

        nama_produk.addEventListener('change', function(){
            fetch('/dashboard/produk_jualan/checkSlug?nama_produk=' + nama_produk.value )
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

    </script>



@endsection