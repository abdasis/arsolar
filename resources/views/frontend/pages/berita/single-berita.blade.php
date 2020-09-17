@extends('frontend.layouts.app')

@section('content')
    <div class="container-fluid  mt-100">
        <div class="row section-breadcrumb">
           <div class="col-md-12">
               <div class="container-fluid">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Berita</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $berita->judul_berita }}</li>
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
                            <h3 class="header-title">{{ $berita->judul_berita }}
                            </h3>
                            <div class="badge badge-info text-white p-1">{{ $berita->created_at }}</div>
                            <hr>
                            <div class="card-img-top my-2">
                                <img src="{{ asset('gambar-berita') . '/' . $berita->thumbnail_berita }}" alt="" width="100%" srcset="">
                            </div>
                            <div class="card-text">
                                {!! $berita->isi_berita !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
