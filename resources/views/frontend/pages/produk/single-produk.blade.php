@extends('frontend.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row section-breadcrumb  mt-100">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('produk.index') }}">Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->nama_produk }}</li>
            </ol>
        </nav>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3">
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
                                            href="{{ url('/produk') }}/?kategory={{ $category->nama_kategori }}">{{$category->nama_kategori }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="product-wrapper shadow-md">
                <div class="inner-product">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="product-title mt-3">
                                    {{ Str::title($product->nama_produk) }}
                                </h3>
                                <div class="meta-product">
                                    <div class="badge badge-light p-1"><i class="mdi mdi-calendar"></i>
                                        {{ $product->created_at }}</div>
                                    <div class="badge badge-light p-1"><i class="mdi mdi-tag"></i>
                                        {{ $product->kategori }}</div>
                                </div>
                                <img src="{{ url('/') }}/gambar-produk/{{ $product->thumbnail }}" alt="" class=" w-100"
                                    height="400px" style="object-fit: contain">
                            </div>
                        </div>
                        <div class="row">
                            <div class="container">
                                <div class="product-discription p-2">
                                    <h4 class="widget-title">
                                        RINCIAN PRODUCT
                                    </h4>
                                    <div class="discription-content">
                                        {!! $product->diskripsi !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="related-product shadow-md py-2 my-3">
                <div class="container">
                    <h4 class="widget-title">
                        Related Product
                    </h4>
                    <div class="row">
                        @foreach ($related as $relatedProduct)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="bg-light">
                                    <img src="{{ url('/') }}/gambar-produk/{{ $relatedProduct->thumbnail }}" alt=""
                                        class="w-100">
                                </div>
                                <div class="product-info mt-1">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="font-13 mt-0 sp-line-1"><a
                                                    href="{{ route('produk.show', $relatedProduct->nama_produk) }}"
                                                    class="text-dark">{{ Str::title($relatedProduct->nama_produk) }}</a>
                                            </h5>
                                        </div>
                                        <div class="col-auto">
                                            <div class="product-price-tag">
                                                <a href="{{ route('produk.show', $relatedProduct->nama_produk) }}">
                                                    <button class="btn btn-soft-info btn-sm"><i
                                                            class="mdi mdi-open-in-new"></i></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div> <!-- end product info-->
                            </div> <!-- end card-box-->
                        </div> <!-- end col-->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
