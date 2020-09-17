@extends('frontend.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row section-breadcrumb mt-100">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb pl-2">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Produk</li>
            </ol>
        </nav>
    </div>
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="category-wrapper">
                <div class="kategori-box">
                    <div class="category-widget bg-white shadow py-2">
                        <div class="container">
                            <h4 class="widget-title">
                                BERITA TERBARU
                            </h4>
                            <div class="inner-category">
                                <ul class="nav navbar-nav flex-column ml-0 pl-1">
                                    <li class="nav-item">
                                        @foreach ($recents as $recent)
                                        <a class="nav-link active" href="{{ route('berita') }}">{{ $recent->judul_berita }}</a>
                                        @endforeach
                                    </li>

                                  </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="product-wrapper">

                <div class="row">
                    @if ($berita->count() > 0)
                        @foreach ($berita as $berita)
                            <div class="col-md-12">
                                <div class="card shadow mb-3">
                                    <div class="row no-gutters">
                                      <div class="col-md-4">
                                        <a href="{{ route('berita.single', $berita->judul_berita) }}">
                                            <img src="{{ url('/') }}/gambar-berita/{{ $berita->thumbnail_berita }}" height="150px" class="card-img p-2" alt="..." style="object-fit: contain">
                                        </a>

                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h5 class="card-title"><a href="{{ route('berita.single', $berita->judul_berita) }}">
                                            {{ $berita->judul_berita }}</a></h5>
                                          <p class="card-text">{!! $berita->isi_berita !!}</p>
                                          <p class="card-text"><small class="text-muted">{{ $berita->created_at }}</small></p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <div class="container">
                        <div class="alert alert-warning">
                            <h5>Belum ada produk yang tersedia</h5>
                        </div>
                    </div>
                    @endif
                </div>


            </div>

        </div>
    </div>
</div>
@endsection
