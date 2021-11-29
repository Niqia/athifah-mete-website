<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                Dashboard
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard/produk_jualan*') ? 'active' : ''}}" href="/dashboard/produk_jualan">
                <span data-feather="shopping-cart"></span>
                Products
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/">
                <span data-feather="layout"></span>
                    Website
                </a>
            </li>

            <!-- @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-center align-items-center px-3 mt-4 mb-1">
                    <span>Administrator</span>
                </h6>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('dashboard/kategori*') ? 'active' : ''}}" href="/dashboard/kategori">
                            <span data-feather="list"></span>
                                Kategori Produk
                        </a>
                    </li>
                </ul>
            @endcan -->
        
        </ul>

    </div>
</nav>