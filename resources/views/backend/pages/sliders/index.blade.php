@extends('backend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Slider</a></li>
                            <li class="breadcrumb-item active">Daftar Slider</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Slider</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-1">
                <a href="{{ route('slider.create') }}">
                    <button class="btn btn-blue btn-sm"><i class="fa fa-plus-circle"></i>Tambah  Slider</button>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Daftar slider</h4>
                <p></p>

                <table id="basic-datatable" class="table dt-responsive table-striped table-sm nowrap w-100">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama slider</th>
                            <th>Deskripsi Slider</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Dibuat pada</th>
                            <th>Option</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($sliders as $key => $slider)
                        <tr>
                            <td class="align-middle">{{ $key+1 }}</td>
                            <td class="align-middle">{{ $slider->nama_slider }}</td>
                            <td class="align-middle">{!! Str::limit($slider->deskripsi_slider,50) !!}</td>
                            <td class="align-middle"><img src="{{ url('/') }}/gambar_slider/{{ $slider->gambar_slider }}" width="100" alt="" class="img-fluid img-thumbnail"></td>
                            <td class="align-middle"><div class="badge {{ $slider->status == 'Publish' ? 'badge-soft-success text-success' : 'badge-soft-warning' }}">{{ $slider->status }}</div></td>
                            <td class="align-middle">{{ $slider->created_at }}</td>
                            <td class="align-middle">
                                <div class="row">
                                    <a href="{{ route('slider.edit', $slider->id) }}">
                                        <button class="btn btn-sm text-warning"><i class="fa fa-pencil-alt"></i></button>
                                    </a>
                                    <form action="{{ route('slider.destroy', $slider->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
