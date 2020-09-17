@extends('frontend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row section-breadcrumb mt-100">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb pl-2">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="{{ route('proyek.index') }}">Daftar Project</li>
                </ol>
            </nav>
        </div>
        <div class="project-wrapper">
            <div class="row">
                @foreach ($proyeks as $proyek)
                <div class="col-md-3">
                    <div class="demo-box bg-white mt-4 p-2">
                        <a href="{{ route('proyek.show', $proyek->title_proyek) }}" class="text-dark">
                            <img src="{{ url('/') }}/gambar-proyek/{{ $proyek->thumbnail_proyek }}" alt="" class="img-fluid mx-auto d-block">
                            <div class="p-3 text-center">
                                <h5 class="mb-0">{{ strtoupper($proyek->title_proyek) }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                <!-- end col -->
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-12">
                <nav aria-label="..." class="mx-auto m-0">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
@endsection
