<div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
            </div>
            <div class="modal-body">
            <form action="{{route('peminjaman.item.store', ['0'])}}" method="POST" id="formItem" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xl-12">                        
                        <div class="form-group">
                        <input name="peminjaman_id" value="0" type="hidden"/>
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
                <a href="javascript:ajaxSave('{{route('peminjaman.item.store', ['0'])}}')" class="btn btn-primary">Simpan</a>
            </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">

    function ajaxSave(filename, content) {
        content = typeof content !== 'undefined' ? content : 'content';
        $('.loading').show();
        var form = $('#formItem');
        var formData = new FormData($('#formItem')[0]);

        $.ajax({
            type: "POST",
            url: filename,
            enctype: 'multipart/form-data',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $("#" + content).html(data);
                $('.loading').hide();
                $('#addItemModal').modal('toggle');
                clearForm("#formItem");
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }

</script>