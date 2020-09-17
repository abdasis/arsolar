@extends('frontend.layouts.app')


@section('content')

    <div class="container-fluid">
        <div class="row section-breadcrumb">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb pl-2">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 my-5">
                <div class="contact-wrapper shadow p-3 rounded">
                    <h3>{{ $site->nama_situs }}</h3>
                    <hr>
                    <img src="{{ asset('frontend/assets/images/') . '/' . $site->logo }}" alt="" class="img-responsive">
                    <p>
                        {!! $site->about_us !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
