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
                    <div class="category-widget bg-white shadow-md py-2">
                        <div class="container">
                            <h4 class="widget-title">
                                KATEGORI PRODUK

                            </h4>
                            <div class="inner-category">
                                <ul class="nav navbar-nav flex-column ml-0 pl-0">
                                    @foreach ($categories as $category)
                                    <li class="nav-item">
                                        <a class="nav-link active"
                                            href="{{ url('/produk') }}/?kategory={{ $category->nama_kategori }}">{{ $category->nama_kategori }}</a>
                                    </li>
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
                        <div class="card product-box shadow-md">
                            <div class="card-img-top">
                                <a href="{{ route('produk.show', $product->siput) }}">
                                    <img src="{{ url('/') }}/gambar-produk/{{ $product->thumbnail }}" alt="product-pic"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="card-body p-2">
                                <h5 class="font-15 sp-line-1"><a href="{{ route('produk.show', $product->siput) }}"
                                        class="text-dark">{{$product->nama_produk }}</a>
                                </h5>
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
