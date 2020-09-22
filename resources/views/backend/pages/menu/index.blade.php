@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashbaord</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                        <li class="breadcrumb-item active">Semua menu</li>
                    </ol>
                </div>
                <h4 class="page-title">Menu</h4>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-12">
            @if (Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
            @endif
       </div>
       <div class="col-md-12 mb-2">
        <a href="{{ route('menu.create') }}" class="">
            <button class="btn btn-sm btn-primary">tambah menu</button>
        </a>
       </div>
    </div>
    <div class="row">
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
                            @foreach ($menus as $key => $menu)
                            <tr>
                                <td class="align-middle">{{ $menu->name }}</td>
                                <td class="align-middle">{{ $menu->link }}</td>
                                <td class="align-middle">
                                    <div class="row justify-content-center">
                                        <a href="{{ route('menu.edit', $menu->id) }}">
                                            <button class="btn btn-sm text-warning"><i class="fa fa-pencil-alt"></i></button>
                                        </a>
                                        <form action="{{ route('menu.destroy', $menu->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
