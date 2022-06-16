<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Asset</h5>
            </div>
            <div class="modal-body">
            <form action="{{route('master.asset.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xl-12">
                        <div class="form-group">
                            <label class="small mb-1">Nama Asset</label><label class="small mb-1" style="color:red">*</label>
                            <input name="nama_asset" required="true" value="{{ old('nama_asset') }}" class="form-control{{ $errors->has('nama_asset') ? ' is-invalid' : '' }}" type="text"/>
                            @if ($errors->has('nama_asset'))
                                <span class="small" style="color:red" role="alert">
                                    <strong>{{ $errors->first('nama_asset') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">Jumlah Tersedia</label><label class="small mb-1" style="color:red">*</label>
                            <input name="jumlah_asset" required="true" value="{{ old('jumlah_asset') }}" class="form-control{{ $errors->has('jumlah_asset') ? ' is-invalid' : '' }}" type="text"/>
                            @if ($errors->has('jumlah_asset'))
                                <span class="small" style="color:red" role="alert">
                                    <strong>{{ $errors->first('jumlah_asset') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" type="button" data-dismiss="modal">Tutup</button>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>