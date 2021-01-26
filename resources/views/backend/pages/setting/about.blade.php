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
            <form action="{{ route('admin.setting.store-about') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="">Tentang Situs</label>
                    <textarea name="aboutus" id="editor" cols="4" rows="5" class="form-control shadow-none"
                        placeholder="Masukan about us">{{ $site->about_us ?? '' }}</textarea>
                    <small class="text-muted">Digunakan untuk halaman about</small>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info shadow-none">Simpan Pengaturan</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
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
