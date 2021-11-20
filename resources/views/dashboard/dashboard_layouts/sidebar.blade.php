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
        
        </ul>

    </div>
</nav>