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
    <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                @if (Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        Tambah Project
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label for="title_proyek">Judul Proyek</label>
                            <input type="text" name="title_proyek" value="{{ old('title_proyek') }}"
                                class="form-control" placeholder="Masukan title proyek">
                        </div>
                        <div class="form-group">
                            <label for="diskripsi_proyek">Diskripsi Proyek</label>
                            <textarea id="editor" name="diskripsi_proyek"
                                placeholder="Masukan Keterangan proyek">{{ old('diskripsi_proyek') }}</textarea>
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
                            <small class="text-danger">Harus memilih salah satu</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Pilih thumbnail</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="thumbnail_proyek" type="file" class="custom-file-input"
                                        id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">Pilih gambar</label>
                                </div>
                            </div>
                            @if ($errors->first('thumbnail_proyek'))
                            <small class="text-danger">Thumbnail proyek harus diisi</small>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-save mr-1"></i> Simpan
                            Produk</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection


@section('js')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: "textarea",
        height : "480",
        plugins: "nonbreaking",
        nonbreaking_force_tab: true,
        toolbar: "nonbreaking",
        relative_urls: false,
        paste_data_images: true,
        image_title: true,
        statusbar: false,
        automatic_uploads: true,
        images_upload_url: "/images/upload",
        file_picker_types: "image",
        codesample_global_prismjs: true,
        image_class_list: [
            {title: 'Full width', value: 'img-fluid img-responsive preview'},
            {title: 'Bootstrap', value: 'w-100'},
        ],
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern code",
            "codesample"
        ],
        toolbar1:
            "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | codesample bullist numlist outdent indent | link image",
        // override default upload handler to simulate successful upload
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*");
            input.onchange = function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function() {
                    var id = "blobid" + new Date().getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(",")[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        }
    });
</script>
@endsection

@section('css')
@endsection
