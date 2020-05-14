<nav class="sidebar-nav">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="nav-icon icon-speedometer"></i> Dashboard
            </a>
        </li>

        <li class="nav-title">MANAJEMEN KEDAI</li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="nav-icon icon-grid"></i> Kategori
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">
                <i class="nav-icon icon-tag"></i> Produk
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('addadmin.index') }}">
                <i class="nav-icon icon-user"></i> Tambah Admin
            </a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="nav-icon icon-people"></i> Daftar User
            </a>
        </li>
        <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-settings"></i> Pengaturan
            </a>
            <ul class="nav-dropdown-items">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="nav-icon icon-puzzle"></i> Toko
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('front.index') }}">
                <i class="nav-icon icon-screen-desktop"></i> Website
            </a>
        </li>
    </ul>
</nav>