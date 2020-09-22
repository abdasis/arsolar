@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">Edit Menu</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Menu</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Tambah Kategori
                </div>
                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Menu</label>
                            <input type="text" name="name" value="{{ $menu->name }}" class="form-control" placeholder="Masukan Nama Kategori">
                            @if ($errors->has('name'))
                                <small class="text-danger">Kategori harus diisi</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" name="link" value="{{ $menu->link }}" class="form-control" placeholder="Masukan Nama Kategori">
                            @if ($errors->has('link'))
                                <small class="text-danger">Kategori harus diisi</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary btn-sm"><i class="fa fa-save mr-1"></i>Simpan Kategori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Daftar link aktif</div>
                <div class="card-body">
                    <div class="pre text-danger">
                        <ul>
                            <li>/about-us</li>
                            <li>/berita</li>
                            <li>/trading</li>
                            <li>/produk</li>
                            <li>/proyek</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection