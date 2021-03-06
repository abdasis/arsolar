@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-100">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h3 class="text-center">
                    Transformer
                </h3>
                <p class="text-center font-16 ">
                    Kami memasok peralatan mekanik dan distributor resmi penjualan alat-alat berat transformer dan generating set (Genset) berbagai merk seperti :
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">TRAFINDO</h4>
                        <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_18.png') }}" alt="" srcset="">
                    </div>
                    <div class="card-body">
                        <button class="btn btn-block btn-sm btn-outline-blue">Lihat Selengkapnya</button>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">GUNINDO</h4>
                        <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_19.png') }}" alt="" srcset="">
                    </div>
                    <div class="card-body">
                        <button class="btn btn-block btn-sm btn-outline-blue">Lihat Selengkapnya</button>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="card-title">STARLITE</h4>
                        <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_131.png') }}" alt="" srcset="">
                    </div>
                    <div class="card-body">
                        <button class="btn btn-block btn-sm btn-outline-blue">Lihat Selengkapnya</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
