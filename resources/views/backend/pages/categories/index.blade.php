@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>
                </div>
                <h4 class="page-title">Kategori</h4>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-12">
            @if (Session::has('status'))
            <div class="alert alert-success">{{ Session::get('status') }}</div>
        @endif
       </div>
       
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Tambah Kategori
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="nama_kategori" value="{{ old('nama_kategori') }}" class="form-control" placeholder="Masukan Nama Kategori">
                            @if ($errors->has('nama_kategori'))
                                <small class="text-danger">Kategori harus diisi</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Pilih Icons</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="icon_kategori" type="file" class="custom-file-input" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">Pilih gambar</label>
                                </div>
                            </div>
                            @if ($errors->first('icon_kategori'))
                                <small class="text-danger">Thumbnail proyek harus diisi</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Diskripsi</label>
                            <textarea name="diskripsi_kategori" id="" cols="30" rows="10" name="diskripsi_kategori" class="form-control shadow-none">{{ old('diskripsi_kategori') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary btn-sm"><i class="fa fa-save mr-1"></i>Simpan Kategori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Daftar category</h4>
                    <p></p>

                    <table id="basic-datatable" class="table dt-responsive table-striped table-sm nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Kategori</th>
                                <th>Ditambahkan</th>
                                <th>Option</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($categories as $key => $category)
                            <tr>
                                <td class="align-middle">{{ $category->nama_kategori }}</td>
                                <td class="align-middle">{{ $category->created_at }}</td>
                                <td class="align-middle">
                                    <div class="row justify-content-center">
                                        <a href="{{ route('kategori.edit', $category->id) }}">
                                            <button class="btn btn-sm text-warning"><i class="fa fa-pencil-alt"></i></button>
                                        </a>
                                        <form action="{{ route('kategori.destroy', $category->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm text-danger"><i class="fa fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link href="{{ url('/') }}/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<script src="{{ url('/') }}/backend/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('/') }}/backend/assets/js/pages/datatables.init.js"></script>
@endsection
