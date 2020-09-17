@extends('frontend.layouts.app')

@section('content')
<div class="container-fluid mt-100 mb-5">
    <div class="row section-breadcrumb">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb pl-2">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item"><a href="#">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Daftar Produk</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="category-wrapper">
                <div class="kategori-box">
                    <div class="category-widget bg-white shadow py-2">
                        <div class="container">
                            <h4 class="widget-title">
                                KATEGORI PRODUK
                            </h4>
                            <div class="inner-category">
                                <ul class="nav navbar-nav flex-column ml-0 pl-0">
                                    @foreach ($categories as $category)
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{ url('/produk') }}/?kategory={{ $category->nama_kategori }}">{{ $category->nama_kategori }}</a>                                      </li>
                                    @endforeach

                                  </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="product-wrapper">
                @if (count($products)>0)
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card product-box shadow">
                            <div class="card-img-top">
                                <a href="{{ route('produk.show', $product->nama_produk) }}">
                                    <img src="{{ url('/') }}/gambar-produk/{{ $product->thumbnail }}"  alt="product-pic" class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body p-2">
                                <div class="product-info">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="font-13 mt-0 sp-line-1"><a href="{{ route('produk.show', $product->nama_produk) }}" class="text-dark">{{ $product->nama_produk }}</a> </h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="product-price-tag">
                                                <a href="{{ route('produk.show', $product->id) }}">
                                                    <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end product info-->
                            </div>
                        </div> <!-- end card-box-->
                    </div>
                    @endforeach
                </div>
                @else
                <div class="row">
                    <div class="container">
                        <div class="alert alert-warning">
                            <h5>Belum ada produk yang tersedia</h5>
                        </div>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection
