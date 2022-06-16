@extends("master.main")

@section("title","Detail Pengadaan")

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
                    @include('module.peminjaman.memo.barangpengembalian')
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection