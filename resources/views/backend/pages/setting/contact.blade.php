
@extends('backend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Setting</a></li>
                            <li class="breadcrumb-item active">General</li>
                        </ol>
                    </div>
                    <h4 class="page-title">General</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if (Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
                <form action="{{ route('admin.setting.store-contact') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="" cols="30" rows="6" class="form-control">{{ $site->alamat ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="nama_situs">Email Aktif</label>
                        <input type="text" name="email" placeholder="Masukan Title Website" class="form-control shadow-none" value="{{ $site->email ?? '' }}">
                    </div>

                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control shadow-none" name="telepon" placeholder="Masukan Tagline situs" value="{{ $site->telepon ?? '' }}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info shadow-none">Simpan Pengaturan</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

