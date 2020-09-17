@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-100">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h3 class="text-center">
                    Trading
                </h3>
                <p class="text-center font-16 ">
                    Kami memasok peralatan mekanik dan distributor resmi penjualan alat-alat berat transformer dan generating set (Genset) berbagai merk seperti :
                </p>
            </div>
        </div>

        <div class="row">
            @foreach ($tradings as $trading)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top">
                        <img src="{{ asset('gambar-produk' . $trading->thumbnail ) }}"  alt="product-pic" class="img-fluid">
                    </div>
                    <div class="card-body p-2 shadow">
                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-13 mt-0 sp-line-1"><a href="{{ $trading->id }}" class="text-dark">{{ $trading->nama_produk }}</a> </h5>
                                </div>
                                <div class="col-auto">
                                    <div class="product-price-tag">
                                        <a href="#">
                                            <button class="btn btn-soft-info btn-sm"><i class="mdi mdi-open-in-new"></i></button>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
