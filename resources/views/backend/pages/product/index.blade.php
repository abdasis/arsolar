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
                <div class="alert alert-success">{{ Session::get('status') }} </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Daftar Product</h4>
                    <p></p>

                    <table id="basic-datatable" class="table dt-responsive table-striped table-sm nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Diskripsi</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($products as $key => $product)
                            <tr>
                                <td>{{ $product->nama_produk }}</td>
                                <td>{{ Str::limit(strip_tags($product->diskripsi), 50) }}</td>
                                <td>
                                    <span class="badge badge-light shadow-none p-1">{{ $product->status_produk }}</span>
                                </td>
                                <td>
                                    <div class="row">
                                        <a href="{{ route('product.edit', $product->id) }}">
                                            <button class="btn btn-sm text-warning"><i class="fa fa-pencil-alt"></i></button>
                                        </a>
                                        <a href="{{ route('product.translate', $product->siput) }}">
                                            <button class="btn btn-sm text-info"><i class="fa fa-language"></i></button>
                                        </a>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
