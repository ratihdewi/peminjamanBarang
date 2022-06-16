<div class="modal fade" id="addItemNoJsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
            </div>
            <div class="modal-body">
            <form action="{{route('peminjaman.item.store', [$peminjaman->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-12">
                        <div class="form-group">
                            <input name="peminjaman_id" value="{{$peminjaman->id}}" type="hidden"/>
                            <label class="small mb-1">Barang </label>
                            <select name="asset_id" class="form-control" id="asset">
                                @foreach($assets as $asset)
                                    <option value="{{$asset->id}}">{{$asset->nama_asset}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                        <label class="small mb-1">Jumlah </label><label class="small mb-1" style="color:red">*</label>
                            <input name="jumlah" required="true" value="{{ old('jumlah') }}" class="form-control{{ $errors->has('jumlah') ? ' is-invalid' : '' }}" type="text"/>
                            @if ($errors->has('jumlah'))
                                <span class="small" style="color:red" role="alert">
                                    <strong>{{ $errors->first('jumlah') }}</strong>
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