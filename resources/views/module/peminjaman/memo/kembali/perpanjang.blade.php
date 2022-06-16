@extends("master.main")

@section("title","Ubah User")

@section("content")

<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="book-open"></i></div>
                        <a href="{{route('master.user.index')}}"> Daftar User </a>  &nbsp;> Ubah
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-4">
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('perpanjang.proses', [$peminjaman])}}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-xl-6">
                                <!-- Form Group (username)-->
                                <div class="form-group">
                                    <label class="small mb-1">Kode Transaksi </label><label class="small mb-1" style="color:red">*</label>
                                    <input name="kode_transaksi" required="true" value="{{$peminjaman->kode_transaksi}}" class="form-control{{ $errors->has('kode_transaksi') ? ' is-invalid' : '' }}" type="text"/>
                                    @if ($errors->has('kode_transaksi'))
                                        <span class="small" style="color:red" role="alert">
                                            <strong>{{ $errors->first('kode_transaksi') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Nama Peminjam </label><label class="small mb-1" style="color:red">*</label>
                                    <input name="peminjam" required="true" value="{{ $peminjaman->peminjam }}" class="form-control{{ $errors->has('peminjam') ? ' is-invalid' : '' }}"/>
                                    @if ($errors->has('peminjam'))
                                        <span class="small" style="color:red" role="alert">
                                            <strong>{{ $errors->first('peminjam') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">NIP </label>
                                    <input name="nip" class="form-control{{ $errors->has('nip') ? ' is-invalid' : '' }}" value="{{ $peminjaman->nip }}" type="text"/>
                                    @if ($errors->has('nip'))
                                        <span class="small" style="color:red" role="alert">
                                            <strong>{{ $errors->first('nip') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">No Handphone </label>
                                    <input name="no_hp" class="form-control{{ $errors->has('no_hp') ? ' is-invalid' : '' }}" value="{{ $peminjaman->no_hp }}" type="number"/>
                                    @if ($errors->has('no_hp'))
                                        <span class="small" style="color:red" role="alert">
                                            <strong>{{ $errors->first('no_hp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="small mb-1">Email </label><label class="small mb-1" style="color:red">*</label>
                                    <input name="email" required="true" value="{{$peminjaman->email}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text"/>
                                    @if ($errors->has('email'))
                                        <span class="small" style="color:red" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Tanggal Pinjam </label><label class="small mb-1" style="color:red">*</label>
                                    <input name="tgl_pinjam" required="true" value="{{$peminjaman->tgl_pinjam}}" class="form-control{{ $errors->has('tgl_pinjam') ? ' is-invalid' : '' }}" type="date"/>
                                    @if ($errors->has('tgl_pinjam'))
                                        <span class="small" style="color:red" role="alert">
                                            <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Tanggal Kembali </label><label class="small mb-1" style="color:red">*</label>
                                    <input name="tgl_kembali" required="true" value="{{$peminjaman->tgl_kembali}}" class="form-control{{ $errors->has('tgl_kembali') ? ' is-invalid' : '' }}" type="date"/>
                                    @if ($errors->has('tgl_kembali'))
                                        <span class="small" style="color:red" role="alert">
                                            <strong>{{ $errors->first('tgl_kembali') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Penanggung Jawab </label><label class="small mb-1" style="color:red">*</label>
                                    <input name="user_id" required="true" value="{{$peminjaman->user_id}}" class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" hidden=""/>
                                    <input value="{{$peminjaman->user->name}}" class="form-control"/>
                                    @if ($errors->has('user_id'))
                                        <span class="small" style="color:red" role="alert">
                                            <strong>{{ $errors->first('user_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary float-right" type="submit">Simpan</button>
                        <a href="{{ url()->previous() }}" class="btn btn-light float-right" style="margin-right:10px">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
    $('select[name=role_id]').on('change', function () {

        if (this.value == 4) {
            $('input[id=pdn]').prop('value', 0);
        }

        else {
            $('input[id=pdn]').prop('value', 1);
        }

    });


</script>

@endsection
