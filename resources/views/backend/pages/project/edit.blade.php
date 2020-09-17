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
        <form action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
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
                                <input type="text" name="title_proyek" value="{{ $project->title_proyek }}" class="form-control" placeholder="Masukan title proyek">
                            </div>
                            <div class="form-group">
                                <label for="diskripsi_proyek">Diskripsi Proyek</label>
                                <textarea id="editor" name="diskripsi_proyek" placeholder="Masukan Keterangan proyek">{{ $project->diksripsi_proyek }}</textarea>
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
                                    <option {{ $project->status == 'Draft' ? 'selected' : '' }}>Draft</option>
                                    <option {{ $project->status == 'Publish' ? 'selected' : '' }}>Publish</option>
                                </select>
                                @if ($errors->first('status'))
                                    <small class="text-danger">Harus memilih salah satu</small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Pilih thumbnail</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="thumbnail_proyek" type="file" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Pilih gambar</label>
                                    </div>
                                </div>
                                @if ($errors->first('thumbnail_proyek'))
                                    <small class="text-danger">Thumbnail proyek harus diisi</small>
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

@section('css')
@endsection
