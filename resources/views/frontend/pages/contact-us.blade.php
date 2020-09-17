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
                <div class="row mb-2">
                    <div class="col-md-4">
                        <div class="card p-1">
                            <div class="row align-items-center">
                                <div class="col-md-3"><i class="mdi mdi-map-marker  mx-auto mt-4 mdi-36px"></i></div>
                                <div class="col-md-9">Jl. Percobaan, Kec. Kesalahan, Kab. Ngebug wkkwwkw</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-1">
                            <div class="row align-items-center">
                                <div class="col-md-3"><i class="mdi mdi-phone mx-auto mt-4 mdi-36px"></i></div>
                                <div class="col-md-9"><span class="pt-3">08172638646734</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-1">
                            <div class="row align-items-center">
                                <div class="col-md-3"><i class="mdi mdi-gmail mx-auto mt-4 mdi-36px"></i></div>
                                <div class="col-md-9">
                                    <span>abdasis@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-wrapper shadow p-3 rounded">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="Masukan Nama Lengkap">
                            </div>
                            <div class="col-md-6">
                                <label for="nama">Alamat Email</label>
                                <input type="text" class="form-control" placeholder="Masukan Alamat Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" placeholder="Masukan Subject Pesan">
                        </div>
                        <div class="form-group">
                            <label for="content">Isi Pesan</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Masukan Isi Pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
