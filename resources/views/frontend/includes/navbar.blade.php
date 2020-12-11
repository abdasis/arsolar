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
                    <a href="{{ url('/') }}" class="nav-link">{{ GoogleTranslate::trans('Beranda', Session::get('bahasa') ?? 'id') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('aboutus') }}" class="nav-link">{{ GoogleTranslate::trans('Tentang Kami', Session::get('bahasa') ?? 'id') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ GoogleTranslate::trans('Produk', Session::get('bahasa') ?? 'id') }}
                        <span><i class="mdi mdi-menu-down"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="productDropdown">
                        @foreach ($category as $item)
                            <a class="dropdown-item"  href="{{ url('/produk') }}/?kategory={{ $item->nama_kategori }}">{{ GoogleTranslate::trans($item->nama_kategori, Session::get('bahasa') ?? 'id') }}</a>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ GoogleTranslate::trans('Service', Session::get('bahasa') ?? 'id') }}
                        <span><i class="mdi mdi-menu-down"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('trading') }}">{{ GoogleTranslate::trans('Trading', Session::get('bahasa') ?? 'id') }}</a>
                        <a class="dropdown-item" href="{{ route('service') }}">{{ GoogleTranslate::trans('Service', Session::get('bahasa') ?? 'id') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact-us.index') }}" class="nav-link">{{ GoogleTranslate::trans('Hubungi Kami', Session::get('bahasa') ?? 'id') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ GoogleTranslate::trans('Bahasa', Session::get('bahasa') ?? 'id') }}
                        <span><i class="mdi mdi-menu-down"></i></span>

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('bahasa', 'id') }}">ID</a>
                        <a class="dropdown-item" href="{{ route('bahasa', 'en') }}">EN</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
