@extends('frontend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row section-breadcrumb  mt-100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('produk.index') }}">Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->nama_produk }}</li>
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
                                        <a class="nav-link active" href="{{ url('/produk') }}/?kategory={{ $category->nama_kategori }}">{{ $category->nama_kategori }}</a>
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
                <div class="product-wrapper shadow">
                    <div class="inner-product">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 p-1">
                                    <img src="{{ url('/') }}/gambar-produk/{{ $product->thumbnail }}" alt="" class="img-responsive img-fluid img-thumbnail">
                                </div>
                                <div class="col-md-6 py-3">
                                    <div class="product-spec">
                                        <h3 class="product-title">
                                            {{ $product->nama_produk }}
                                        </h3>
                                        <h5 class="product-subtitle">
                                            panel surya 20kw lebih murah 220v 60hz di grid 20000 watts sistem tenaga surya
                                        </h5>
                                        <hr>
                                        <table class="table table-borderless table-sm">
                                            <tr>
                                                <th>Merek </th>
                                                <td>:</td>
                                                <td>{{ $product->merk }}</td>
                                            </tr>
                                            <tr>
                                                <th>Item No.</th>
                                                <td>:</td>
                                                <td>{{ $product->nomor_produk }} </td>
                                            </tr>
                                            <tr>
                                                <th>Type</th>
                                                <td>:</td>
                                                <td>{{ $product->tipe_produk }} </td>
                                            </tr>
                                            <tr>
                                                <th>Max. Power</th>
                                                <td>:</td>
                                                <td>{{ $product->max_power }}</td>
                                            </tr>
                                            <tr>
                                                <th>Output Votagey</th>
                                                <td>:</td>
                                                <td>110v 220v</td>
                                            </tr>
                                            <tr>
                                                <th>Certificate</th>
                                                <td>:</td>
                                                <td>{{ $product->certificate }}</td>
                                            </tr>
                                            <tr>
                                                <th>Payment</th>
                                                <td>:</td>
                                                <td>{{ $product->payment }}</td>
                                            </tr>
                                            <tr>
                                                <th>Warrant</th>
                                                <td>:</td>
                                                <td>{{ $product->warrant }} Year </td>
                                            </tr>
                                        </table>
                                        <a href="#" class="btn btn-success rounded">Hubungi Sekarang</a>
                                    </div>
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

                <div class="related-product shadow py-2 my-3">
                    <div class="container">
                        <h4 class="widget-title">
                            Related Product
                        </h4>
                        <div class="row">
                            @foreach ($related as $relatedProduct)
                            <div class="col-md-4">
                                <div class="card-box product-box">
                                    <div class="bg-light">
                                        <img src="{{ url('/') }}/gambar-produk/{{ $relatedProduct->thumbnail }}"  alt="product-pic" class="img-fluid">
                                    </div>
                                    <div class="product-info mt-1">
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
