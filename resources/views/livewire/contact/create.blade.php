<div>
    <div class="card border-0 border-top">
        <div class="card-header bg-white border-0 my-3">
            <h4>Tambah Kontak Baru</h4>
        </div>
        <div class="card-body mx-2 my-4">
            <div class="row">
                <div class="col-md-6">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form wire:submit.prevent="store">
                        <div class="row justify-content-start align-items-center my-2">
                            <div class="col-md-3">
                                <label for="">Nama Depan</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" wire:model="nama_depan" placeholder="Masukan Nama Depan">
                            </div>
                        </div>

                        <div class="row justify-content-start align-items-center my-2">
                            <div class="col-md-3">
                                <label for="">Nama Belakang</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" wire:model="nama_belakang" placeholder="Masukan Nama Belakang">
                            </div>
                        </div>
                        <div class="row justify-content-start align-items-center my-2">
                            <div class="col-md-3">
                                <label for="">Telepon</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" wire:model="telepon" placeholder="Masukan Telepon">
                            </div>
                        </div>
                        <div class="row justify-content-start align-items-center my-2">
                            <div class="col-md-3">
                                <label for="">Email</label>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" wire:model="email" placeholder="Masukan Email">
                            </div>
                        </div>
                        <div class="row justify-content-start align-items-center my-2">
                            <div class="col-md-3">
                                <label for="">Alamat</label>
                            </div>
                            <div class="col">
                                <textarea type="text" class="form-control" wire:model="alamat" placeholder="Masukan Alamat"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-4 float-end">
                            Simpan Kontak
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
