@php
        $site = App\Models\Site::first();
        $category = App\Models\Category::all();
@endphp

<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark shadow">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="{{ URL('/') }}">
            <img src="{{ url('/') }}/frontend/assets/images/{{ $site->logo }}" alt="" class="logo-light" height="30" />
            <img src="{{ url('/') }}/frontend/assets/images/{{ $site->logo }}" alt="" class="logo-dark" height="30" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="{{ url('/') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('aboutus') }}" class="nav-link">Tentang Kami</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk
                        <span><i class="mdi mdi-arrow-down"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="productDropdown">
                        @foreach ($category as $item)
                            <a class="dropdown-item"  href="{{ url('/produk') }}/?kategory={{ $item->nama_kategori }}">{{ $item->nama_kategori }}</a>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                        <span><i class="mdi mdi-arrow-down"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('trading') }}">Trading</a>
                        <a class="dropdown-item" href="{{ route('service') }}">Serivce</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact-us.index') }}" class="nav-link">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
