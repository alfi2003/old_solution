<!-- Modal -->
<div class="modal fade" id="modal_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Inisiasi-Projek</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('inisiasi_projek.store') }}" method="post">
                @csrf

                <div class="modal-body">
                    <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="date" value="{{ $date_now }}" class="form-control" id="tanggal" name="tanggal" readonly required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama_hero" class="form-label">Nama Hero/AM</label>
                                    <input type="text" class="form-control" id="nama_hero" name="nama_hero" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="id_witel" class="form-label">Witel</label>
                                    <select id="id_witel" name="id_witel" class="form-select" aria-label="Default select example" aria-readonly="true" required>
                                        <option selected>==Pilih Witel==</option>
                                        @foreach($list_witel as $i)
                                            <option value="{{ $i->id }}" {{ value(auth()->user()->id_witel) == $i->id ? 'selected' : '' }}>{{ $i->witel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="divisi" class="form-label">Divivsi</label>
                                    <select id="divisi" name="divisi" class="form-select" aria-label="Default select example" required>
                                        <option value="">==Pilih Divisi==</option>
                                        <option value="Divisi-01">Divisi-01</option>
                                        <option value="Divisi-02">Divisi-02</option>
                                        <option value="Divisi-03">Divisi-03</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">No Telp</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="jenis_produk" class="form-label">Jenis Produk</label>
                                    <input type="text" class="form-control" id="jenis_produk" name="jenis_produk" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </form>
        </div>
    </div>
</div>
