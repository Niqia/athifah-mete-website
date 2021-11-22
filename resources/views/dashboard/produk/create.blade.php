@extends('dashboard.dashboard_layouts.dashboard_main')

@section('halaman')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Tambah Produk</h2>
    </div>



    <form method="post" action="/dashboard/produk_jualan" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" required autofocus value="{{old('nama_produk')}}">
                    @error('nama_produk')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>
        </div>

        
        <div class="mb-3 row">
            <label for="slug" class="col-sm-2 col-form-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{old('slug')}}"> 
                    @error('slug')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{old('ukuran')}}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10" >
                <select class="form-select" name="kategori_id">
                    @foreach ($kategori as $kategori)
                        @if(old('kategori_id') == $kategori->id ))
                            <option value="{{$kategori->id}}" selected>{{$kategori->nama_kategori}}</option>
                        @else
                            <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{old('harga')}}">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input id="deskripsi" type="hidden" name="deskripsi" value="{{old('deskripsi')}}">
                <trix-editor input="deskripsi"></trix-editor>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="image" class="col-sm-2 col-form-label">Upload Gambar</label>
            <div class="col-sm-10">
                <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" multiple name="image" onchange="previewImage()">
            </div>
        </div>

        <div class="py-3 px-1" >
            <button type="submit" class="btn btn-primary">Tambah </button>
        </div>
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

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

        function previewImage(){
            
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }


    </script>



@endsection