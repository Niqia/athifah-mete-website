@extends('layouts.main')

@section('halaman')

    <div class="row justify-content-center">
        <div class="col-md-4">

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif


            <main class="form-signin">
                <form class="py-5" action="/login" method="post">
                    <img class="mb-4 img-thumbnail" src="{{ asset('img/athifah (1).jpg') }}" alt="" width="500px" height="500px" style="border-radius: 50%;">
                    <h1 class="h3 mb-3 fw-normal text-center">Admin Login</h1>
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating" id="show_hide_password">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        
                        <label for="password">Password</label>
                        <span for="password" class="justify-content-end"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></span>
                        
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
            </main>
        </div>
    </div>

    

@endsection