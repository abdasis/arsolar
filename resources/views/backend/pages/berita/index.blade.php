@extends('backend.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                        <li class="breadcrumb-item active">Daftar Produk</li>
                    </ol>
                </div>
                <h4 class="page-title">Produk</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if (Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
            @endif
            <div class="card border-top">
                <div class="card-body">
                    <h4 class="header-title">Daftar Product</h4>
                    <p></p>
                </div> <!-- end card body-->
                <div class="card-body p-2">
                    <table id="basic-datatable" class="table dt-responsive table-striped table-sm nowrap w-100 p-0">
                        <thead>
                            <tr>
                                <th>Judul Berita</th>
                                <th>Isi Berita</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Option</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($beritas as $key => $berita)
                            <tr>
                                <td class="align-middle">{{ $berita->judul_berita }}</td>
                                <td class="align-middle"><img style="border: 2px solid rgb(240, 240, 240)" src="{{ asset('gambar-berita') }}/{{ $berita->thumbnail_berita }}" width="100" class="img-fluid img-thumbnail" alt=""></td>
                                @if ($berita->status == 'Publish')
                                <td class="align-middle"><div class="badge badge-success rounded-0">{{ $berita->status }}</div></td>
                                @else
                                <td class="align-middle"><div class="badge badge-dark rounded-0">{{ $berita->status }}</div></td>
                                @endif
                                <td class="align-middle">{{ $berita->created_at }}</td>
                                <td class="align-middle">
                                    <div class="row">
                                        <a href="{{ route('admin.berita.edit', $berita->id) }}">
                                            <button class="btn btn-sm text-warning"><i class="fa fa-pencil-alt"></i></button>
                                        </a>
                                        <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
                </div>
            </div> <!-- end card -->
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
