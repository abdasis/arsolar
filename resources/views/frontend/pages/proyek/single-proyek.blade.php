@extends('frontend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row section-breadcrumb mt-100">
            <div class="col-md-12">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb pl-2">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body shadow-sm">
                            <h3 class="header-title">{{ $proyek->title_proyek }}
                            </h3>
                            <div class="badge badge-info text-white p-1">{{ $proyek->created_at }}</div>
                            <hr>
                            <div class="card-img-top my-2">
                                <img src="{{ asset('gambar-proyek') . '/' . $proyek->thumbnail_proyek }}" alt="" width="100%" srcset="">
                            </div>
                            <div class="card-text">
                                {!! $proyek->diksripsi_proyek !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
