@php
$site = App\Models\Site::first();
$category = App\Models\Category::all();
@endphp

<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark shadow-md">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="{{ URL('/') }}">
            <img src="{{ url('/') }}/frontend/assets/images/{{ $site->logo }}" alt="" class="logo-light" height="30" />
            <img src="{{ url('/') }}/frontend/assets/images/{{ $site->logo }}" alt="" class="logo-dark" height="30" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="{{ url('/') }}" class="nav-link">{{ __('menu.beranda') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('aboutus') }}" class="nav-link">{{ __('menu.tentang_kami') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('menu.produk')
                        <span><i class="mdi mdi-menu-down"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="productDropdown">
                        @foreach ($category as $item)
                        <a class="dropdown-item"
                            href="{{ url('/produk') }}/?kategory={{ $item->nama_kategori }}">{{ $item->nama_kategori }}</a>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Service {{--dd(session()->all())--}}
                        <span><i class="mdi mdi-menu-down"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('trading') }}">Trading</a>
                        <a class="dropdown-item" href="{{ route('service') }}">Service</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact-us.index') }}" class="nav-link">{{ __('menu.kontak_us') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (Session::get('bahasa') == 'id' || empty(Session::get('bahasa')))
                        <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/1x1/id.svg"
                            height="15px" width="auto" alt="">
                        @else
                        <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/1x1/us.svg"
                            height="15px" width="auto" alt="">
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a data-turbolinks="false"
                            class="dropdown-item {{ Session::get('bahasa') == 'id' ? 'active' : '' }}"
                            href="{{ route('bahasa', 'id') }}">
                            <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/1x1/id.svg"
                                height="15px" width="auto" alt=""> Indonesia</a>
                        <a data-turbolinks="false"
                            class="dropdown-item {{ Session::get('bahasa') == 'en' ? 'active' : '' }}"
                            href="{{ route('bahasa', 'en') }}"><img
                                src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/flags/1x1/us.svg"
                                height="15px" width="auto" alt=""> English</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
