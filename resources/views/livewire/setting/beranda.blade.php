<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dahsboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Setting</a></li>
                            <li class="breadcrumb-item active">Beranda</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Setting Beranda</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header bg-white border-bottom">
                        Tambah Tentang Perusahaan
                    </h5>
                    <div class="card-body">
                        <form wire:submit.prevent='store'">
                            <div class="form-group">
                              <label for="judul">Judul Di Beranda</label>
                              <input type="text" wire:model="judul" id="judul" class="form-control" placeholder="Masukan Judul Diberanda dan Footer" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Help text</small>
                            </div>
                            <div class="form-group">
                              <label for="kutipan_beranda">Tentang Halaman</label>
                              <textarea wire:model='kutipan' class="form-control" id="" cols="30" rows="12"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-success"><i class="fa fa-save"></i> Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    Livewire.on('success', function(){
        Swal.fire(
            'Good job!',
            'Data berhasil disimpan mas bro!',
            'success'
        )
    })
</script>
@endpush
