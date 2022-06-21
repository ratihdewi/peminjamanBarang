@extends("master.main")

@section("title","Detail Pengambilan")

@section("content")

<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="book-open"></i></div>
                        <a href="{{route('peminjaman.index')}}"> Daftar Peminjaman </a>  &nbsp;> Detail
                    </h1>
                    
                </div>
                
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-4">
    @include('partial.alert')
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Form Group (username)-->
                            <div class="form-group">
                                <label class="small mb-1">Kode Peminjaman </label>
                                <h3 style="margin-left:10px;">{{$peminjaman->kode_transaksi}}</h3>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Nama Pemnjam </label>
                                <h3 style="margin-left:10px;">{{$peminjaman->peminjam}}</h3>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1"> NIP</label>
                                <h3 style="margin-left:10px;">{{$peminjaman->nip}}</h3>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1"> No. HP</label>
                                <h3 style="margin-left:10px;">{{$peminjaman->no_hp}}</h3>
                            </div>
                            @if($peminjaman->no_memo === NULL)
                            <div class="form-group">
                                <label class="small mb-1"> No. Memo</label>                                
                                <h3 style="margin-left:10px;">Tidak ada nomor memo tersedia</h3>
                            </div>
                            @else
                            <div class="form-group">
                                <label class="small mb-1"> No. Memo</label> 
                                <h3 style="margin-left:10px;">{{$peminjaman->no_memo}}</h3>
                            </div>
                            @endif
                            @if($peminjaman->foto_memo === NULL)
                            <div class="form-group">
                                <label class="small mb-1"> Dokumen Pendukung</label>
                                <h3 style="margin-left:10px;">Tidak ada file tersedia</h3>
                            </div>
                            @else
                            <div class="form-group">
                                <label class="small mb-1"> Dokumen Pendukung</label>
                                <embed  name="foto_memo" type="application/pdf" id="foto_memo" src="{{asset('dokumen/memo/'.$peminjaman->foto_memo)}}" width="600" height="250"readonly=""></embed>
                            </div>
                            @endif
                        </div>
                           
                        <div class="col-xl-6 float-right">                           
                            <div class="form-group">
                                <label class="small mb-1">Email </label>
                                <h1 style="margin-left:10px;">{{$peminjaman->email}}</h1>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Tanggal Pinjam </label>
                                <h1 style="margin-left:10px;">{{$peminjaman->tgl_pinjam}}</h1>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Tanggal Kembali </label>
                                <h1 style="margin-left:10px;">{{$peminjaman->tgl_kembali}}</h1>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">PIC </label>
                                <h1 style="margin-left:10px;">{{$peminjaman->user->name}}</h1>
                            </div>                            
                        </div>
                    </div>
                    @include('module.peminjaman.memo.barangpengambilan')
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection