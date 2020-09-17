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
                <form action="{{ route('admin.setting.store-general') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_situs">Title Website</label>
                        <input type="text" name="nama_situs" placeholder="Masukan Title Website" class="form-control shadow-none" value="{{ $site->nama_situs }}">
                    </div>

                    <div class="form-group">
                        <label for="">Tag line</label>
                        <input type="text" class="form-control shadow-none" name="tagline" placeholder="Masukan Tagline situs" value="{{ $site->tagline }}">
                    </div>

                    <img src="{{ asset('frontend/assets/images/') .'/' . $site->logo }}" class="img-thumbnail" width="80px" alt="{{ $site->logo }}">
                    <div class="form-group">
                        <label>Logo situs</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="logo_situs" type="file" class="custom-file-input" id="inputGroupFile04">
                                <label class="custom-file-label" for="inputGroupFile04">Pilih gambar</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary shadow-none">Simpan Pengaturan</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR
        .replace('editor', {
            filebrowserImageBrowseUrl: '/filemanager?type=Images',
            filebrowserUploadUrl: '{{ route("image.upload", ["_token" => csrf_token()]) }}',
            filebrowserUploadMethod: 'form',
            toolbarGroups: [
                { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                { name: 'forms', groups: [ 'forms' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                { name: 'links', groups: [ 'links' ] },
                { name: 'insert', groups: [ 'insert' ] },
                { name: 'styles', groups: [ 'styles' ] },
                { name: 'colors', groups: [ 'colors' ] },
                { name: 'tools', groups: [ 'tools' ] },
                { name: 'others', groups: [ 'others' ] },
                { name: 'about', groups: [ 'about' ] }
            ],
            removeButtons: 'Cut,Copy,Paste,PasteText,PasteFromWord,Undo,Redo,Source,Save,Templates,NewPage,Preview,Print,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,BidiLtr,BidiRtl,Language,Flash,Smiley,SpecialChar,PageBreak,Iframe,TextColor,BGColor,ShowBlocks,Outdent,Indent,HorizontalRule,Styles,Format,Font,FontSize',
            filebrowserWindowWidth: '640',
         filebrowserWindowHeight: '480'

        })
    </script>
@endsection
