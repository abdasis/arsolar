<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
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
        <form wire:submit.prevent="translate">
            <div class="row">
                <div class="col-md-8">
                    @if (Session::has('status'))
                        <div class="alert alert-success">{{ Session::get('status') }} - <a
                                href="{{ route('product.index') }}"><b>Kembali</b></a></div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            Tambah Produk
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" wire:model="nama_produk" id="nama_produk" class="form-control shadow-none @error('nama_produk') is-invalid @enderror" placeholder="Masukan Nama Product" required>
                            </div>

                            <div class="form-group" wire:ignore>
                                <label for="diskripsi_produk">Diskripsi Produk</label>
                                <textarea id="editor" class="form-class" wire:model="diskripsi"></textarea>
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

                            <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-save mr-1"></i> Simpan
                                Produk</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>


@push('js')
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
            },
            setup: function(editor){
                editor.on('keyup', function(e){
                @this.set('diskripsi', tinymce.activeEditor.getContent())
                })
            }
        });
    </script>
@endpush
