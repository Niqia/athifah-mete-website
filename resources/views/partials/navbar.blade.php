<!-- Start Navbar -->


    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #28AE3D;">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/athifah-Render.png') }}" alt="logo-athifah-mete-kendari" width="164px" height="81px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll px-4">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/" style="font-size: 18px;">Home</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Tentang Kami') ? 'active' : '' }}" href="/tentang-athifah-mete-kendari" style="font-size: 18px;">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Semua Produk') ? 'active' : '' }}" href="/semua-produk" style="font-size: 18px;">Semua Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Kategori') ? 'active' : '' }}" href="/kategori" style="font-size: 18px;">Kategori</a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link {{ ($title === 'Cara Memesan') ? 'active' : '' }}" href="/cara-memesan" style="font-size: 18px;">Cara Memesan</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ ($title === 'Kontak Kami') ? 'active' : '' }}" href="/kontak-kami" style="font-size: 18px;">Kontak Kami</a>
                    </li>
                </ul>


                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard"> <i class="bi bi-layout-text-sidebar"></i> My Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>

                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout <span data-feather="log-out"></span></button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                            <li class="nav-item">
                                <a href="/login" class="nav-link btn btn-outline-success px-4 justify-content-end {{ ($title === 'Login') ? 'active' : '' }}" style="background-color: #fff; color:#28AE3D;"> <i class="bi bi-box-arrow-in-right"></i> Login</a>
                            </li>
                    @endauth
                </ul>
                
            </div>
        </div>
    </nav>

<!-- End Navbar -->