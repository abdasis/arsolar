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
                    <h4 class="page-title">Calendar</h4>
                </div>
            </div>
        </div>
        <form action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    @if (Session::has('status'))
                        <div class="alert alert-success">{{ Session::get('status') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            Edit Slider {{ $slider->nama_slider }}
                        </div>
                        <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_slider">Nama Slider</label>
                                    <input type="text" name="nama_slider" id="nama_slider" class="form-control shadow-none @error('nama_slider') is-invalid @enderror" value="{{ old('nama_slider') }}" placeholder="Masukan Nama Product" required>
                                    @if ($errors->first('nama_slider'))
                                        <small class="text-danger">{{ $errors->first('nama_slider') }}</small>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="diskripsi_produk">Diskripsi Produk</label>
                                    <textarea id="summernote" class="form-class" name="deskripsi_slider">{{ old('deskripsi_slider') }}</textarea>
                                    @if ($errors->first('deskripsi_slider'))
                                        <small class="text-danger">Deskripsi slider harus diisi</small>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Pilih gambar slider</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="gambar_slider" type="file" class="custom-file-input" id="inputGroupFile04">
                                            <label class="custom-file-label" for="inputGroupFile04">Pilih gambar slider</label>
                                        </div>
                                    </div>
                                    @if ($errors->first('gambar_slider'))
                                        <small class="text-danger">Gambar slider harus diisi</small>
                                    @endif


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
                                                        <h4 class="page-title">Calendar</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        @if (Session::has('status'))
                                                            <div class="alert alert-success">{{ Session::get('status') }}</div>
                                                        @endif
                                                        <div class="card">
                                                            <div class="card-header">
                                                                Tambah Slider
                                                            </div>
                                                            <div class="card-body">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="nama_slider">Nama Slider</label>
                                                                        <input type="text" name="nama_slider" id="nama_slider" class="form-control shadow-none @error('nama_slider') is-invalid @enderror" value="{{ $slider->nama_slider }}" placeholder="Masukan Nama Product" required>
                                                                        @if ($errors->first('nama_slider'))
                                                                            <small class="text-danger">{{ $errors->first('nama_slider') }}</small>
                                                                        @endif
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="diskripsi_produk">Diskripsi Produk</label>
                                                                        <textarea id="summernote" class="form-class" name="deskripsi_slider">{{ $slider->deskripsi_slider }}</textarea>
                                                                        @if ($errors->first('deskripsi_slider'))
                                                                            <small class="text-danger">Deskripsi slider harus diisi</small>
                                                                        @endif
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Pilih gambar slider</label>
                                                                        <div class="input-group">
                                                                            <div class="custom-file">
                                                                                <input name="gambar_slider" type="file" class="custom-file-input" value="{{ $slider->gambar_slider }}" id="inputGroupFile04">
                                                                                <label class="custom-file-label" for="inputGroupFile04">Pilih gambar slider</label>
                                                                            </div>
                                                                        </div>
                                                                        @if ($errors->first('gambar_slider'))
                                                                            <small class="text-danger">Gambar slider harus diisi</small>
                                                                        @endif
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                Option
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="inputState">Status</label>
                                                                    <select name="status" id="inputState" class="form-control">
                                                                        <option value="">Choose</option>
                                                                        <option {{ $slider->status == 'Draft' ? 'selected' : '' }}>Draft</option>
                                                                        <option {{ $slider->status == 'Publish' ? 'selected' : '' }}>Publish</option>
                                                                    </select>
                                                                    @if ($errors->first('status'))
                                                                        <small class="text-danger">Harus memilih salah satu</small>
                                                                    @endif
                                                                </div>

                                                                <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-save mr-1"></i> Simpan Produk</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    @endsection


                                    @section('js')
                                    <script src="{{ url('/') }}/backend/assets/summernote/summernote-bs4.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote').summernote({
                                                toolbar: [
                                                    ['style', ['style']],
                                                    ['font', ['bold', 'underline', 'clear']],
                                                    ['color', ['color']],
                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                    ['table', ['table']],
                                                    ['insert', ['link', 'picture', 'video']],
                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                ],
                                                height: 300
                                            });
                                        });
                                    </script>
                                    @endsection

                                    @section('css')
                                    <link rel="stylesheet" href="{{ url('/') }}/backend/assets/summernote/summernote-bs4.css">
                                    @endsection
                                    @if ($errors->first('gambar_slider'))
                                        <small class="text-danger">Gambar slider harus diisi</small>
                                    @endif
                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Option
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputState">Status</label>
                                <select name="status" id="inputState" class="form-control">
                                    <option value="">Choose</option>
                                    <option {{ old('status') == 'Draft' ? 'selected' : '' }}>Draft</option>
                                    <option {{ old('status') == 'Publish' ? 'selected' : '' }}>Publish</option>
                                </select>
                                @if ($errors->first('status'))
                                    <small class="text-danger">Harus memilih salah satu status</small>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-save mr-1"></i> Simpan Produk</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


@section('js')
<script src="{{ url('/') }}/backend/assets/summernote/summernote-bs4.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            height: 300
        });
    });
</script>
@endsection

@section('css')
<link rel="stylesheet" href="{{ url('/') }}/backend/assets/summernote/summernote-bs4.css">
@endsection
