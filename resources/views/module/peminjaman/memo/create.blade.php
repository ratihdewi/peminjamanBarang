@extends("master.main")

@section("title","Tambah Peminjaman")

@section("content")

<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="book-open"></i></div>
                        <a href="{{route('peminjaman.index')}}"> Riwayat Peminjaman </a>  &nbsp;> Tambah
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
    .valid{
        color:green !important;
    }
    .invalid{
        color:red !important;
    }
</style>
<!-- Main page content-->
<div class="container mt-4">
@include('partial.alert')
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('peminjaman.memo.store')}}" method="POST" enctype="multipart/form-data" id="savePengadaan">
                        @csrf   
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="small mb-1">Kode Transaksi&nbsp;</label>
                                    
                                    <input id="kode_transaksi" type="text" class="form-control" name="kode_transaksi" value="{{ $kode }}" required readonly="">
                                @if ($errors->has('kode_transaksi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_transaksi') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                <input name="kondisi" value="baik" type="hidden"/>
                                    <label for="" class="small mb-1">Nama Peminjam</label>
                                    <input id="peminjam" type="text" class="form-control" name="peminjam" value="{{ old('peminjam') }}">
                                    @if ($errors->has('peminjam'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('peminjam') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">NIP&nbsp;</label><input id="nip" type="text" class="form-control" name="nip" value="{{ old('nip') }}">
                                    @if ($errors->has('nip'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nip') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">No Handphone&nbsp;</label>
                                    <input id="no_hp" type="number" class="form-control" name="no_hp" value="{{ old('no_hp') }}">
                                    @if ($errors->has('no_hp'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('no_hp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">No Memo&nbsp;</label>
                                    <input id="no_memo" type="text" class="form-control" name="no_memo" value="{{ old('no_memo') }}">
                                    @if ($errors->has('no_memo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('no_memo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Memo&nbsp;</label>
                                    <input id="foto_memo" type="file" class="form-control" name="foto_memo" value="{{ old('foto_memo') }}">
                                    @if ($errors->has('foto_memo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('foto_memo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" hidden="">Status Peminjaman&nbsp;</label>
                                    <select class="form-control" name="status_id" id="status_id" hidden="">
                                        @foreach($status as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                               
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="small mb-1">Email</label><br>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>                                
                                
                                <div class="form-group">
                                    <label class="small mb-1">Tanggal Pinjam</label><br>
                                    <input id="tgl_pinjam" type="date" class="form-control" name="tgl_pinjam" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}" required="">
                                    @if ($errors->has('tgl_pinjam'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Tanggal Kembali</label><br>
                                    <input id="tgl_kembali" type="date"  class="form-control" name="tgl_kembali" value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(1)->toDateString())) }}" required="" >
                                    @if ($errors->has('tgl_kembali'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tgl_kembali') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">PIC</label><br>
                                    <input id="anggota_nama" type="text" class="form-control" readonly="" value="{{Auth::user()->name}}" required>
                                    <input id="user_id" type="hidden" name="user_id" value="{{ Auth::user()->id }}" required readonly="">
                                
                                    @if ($errors->has('anggota_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('user_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Keterangan</label><br>
                                    <input id="keterangan" type="text" class="form-control" name="keterangan" value="{{ old('keterangan') }}">
                                    @if ($errors->has('keterangan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('keterangan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px;margin-bottom:20px;">
                            <div class="col-xl-12">
                                <div class="col-auto mt-4">
                                    <button class="btn btn-outline-primary btn-sm float-right" type="button" data-toggle="modal" data-target="#addItemModal"><i class="mr-1" data-feather="plus-square"></i>
                                        Tambah Barang
                                    </button>
                                </div>
                                <div class="datatable" id="content">
                                    <table class="table table-hover" width="100%" id="item_table" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>                                        
                                        </tfoot>
                                        <tbody>
                                        
                                            <tr>
                                                <td colspan="10"><center><i>Tidak ada data.</i></center></td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>
                                    <style>
                                        .dataTables_filter {
                                            display: none;
                                        }
                                    </style>
                                </div>
                                <div class="loading"></div>
                            </div>
                        </div>  
                    </form>
                    <button id="savePengadaan" class="btn btn-primary float-right" onclick="checkSubmit()">Simpan</button>
                    <a href="{{ route('peminjaman.index') }}" class="btn btn-light float-right" style="margin-right:10px">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('module.peminjaman.memo.additemjs')
<script type="text/javascript">  
function checkSubmit () {    
        $('#savePengadaan').submit();
    }    

    function clearForm(form)
    {
        $(":input", form).each(function(){
            var type = this.type;
            var tag = this.tagName.toLowerCase();
            if (type == 'text' || type=='textarea' || type=='number')
            {
                this.value = "";
            }
        });
    }

    function ajaxItemDelete(filename, content) {
        content = typeof content !== 'undefined' ? content : 'content';
        $('.loading').show();
        $.ajax({
            type: "GET",
            url: filename,
            success: function (data) {
                $("#" + content).html(data);
                $('.loading').hide();
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }

    

    $("#add").click(function() {
    	var lastField = $("#vendor-form div:last");
        var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        var fieldWrapper = $("<div class=\"row\" style=\"margin-top:5px\" id=\"field" + intId + "\"/>");
        fieldWrapper.data("idx", intId);
        var fName = $("<input style=\"width:40%;margin-left:10px;margin-right:8px;\" placeholder=\"nama vendor\" type=\"text\" name=\"vendor_name[]\" class=\"form-control\" />");
        var fEmail = $("<input style=\"width:40%;margin-right:15px;\" type=\"email\" placeholder=\"email\" name=\"vendor_email[]\" class=\"form-control\" />");
        var removeButton = $("<input type=\"button\" class=\"btn btn-danger btn-sm remove\" value=\"-\" />");
        removeButton.click(function() {
            $(this).parent().remove();
        });
        fieldWrapper.append(fName);
        fieldWrapper.append(fEmail);
        fieldWrapper.append(removeButton);
        $("#vendor-form").append(fieldWrapper);
    });

</script>


<script type="text/javascript">
    $(document).ready( function () {
        $('#item_table').DataTable();
    } );
</script>
@endsection