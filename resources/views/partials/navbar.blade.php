<!-- Start Navbar -->


    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #28AE3D;">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="img/athifah-Render.png" alt="logo-athifah-mete-kendari" width="164px" height="81px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/" style="font-size: 18px;">Home</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Tentang Kami') ? 'active' : '' }}" href="/tentang-athifah-mete-kendari" style="font-size: 18px;">Tentang Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px;">
                        Semua Produk
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item {{ ($title === 'Makanan Khas Sultra') ? 'active' : '' }}" href="/makanan-khas-sultra">Makanan Khas Sultra</a></li>
                        <li><a class="dropdown-item {{ ($title === 'Kerajinan Khas Sultra') ? 'active' : '' }}" href="/kerajinan-khas-sultra">Kerajinan Khas Sultra</a></li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ ($title === 'Cara Memesan') ? 'active' : '' }}" href="/cara-memesan" style="font-size: 18px;">Cara Memesan</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ ($title === 'Kontak Kami') ? 'active' : '' }}" href="/kontak-kami" style="font-size: 18px;">Kontak Kami</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

<!-- End Navbar -->