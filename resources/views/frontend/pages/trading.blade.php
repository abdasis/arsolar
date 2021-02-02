@extends('frontend.layouts.app')

@section('content')
<div class="container mt-100">
    <div class="row">
        <div class="col-md-12 mb-4">
            <h3 class="text-center">
                {{__('page_title.trading') }}

            </h3>
            <p class="text-center font-16 ">
                {{ __('page_title.sub_trading') }}

            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">PERKINS</h4>
                    <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_17.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">DEUTZ</h4>
                    <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_21.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">CUMMINS</h4>
                    <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_14.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">CATERPILAR</h4>
                    <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_15.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-4">
            <h3 class="text-center">
                {{ GoogleTranslate::trans('TradTransformering', Session::get('bahasa') ?? 'id') }}

            </h3>
            <p class="text-center font-16 ">
                {{ GoogleTranslate::trans('Kami memasok peralatan mekanik dan distributor resmi penjualan alat-alat berat transformer dan
                generating set (Genset) berbagai merk seperti :', Session::get('bahasa') ?? 'id') }}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">TRAFINDO</h4>
                    <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_18.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">GUNINDO</h4>
                    <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_19.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="card-title">STARLITE</h4>
                    <img class="card-img-top" src="{{ asset('frontend/assets/images/service/page_131.png') }}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
