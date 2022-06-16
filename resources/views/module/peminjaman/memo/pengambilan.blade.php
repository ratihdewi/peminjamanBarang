@extends("master.main")

@section("title","Riwayat Peminjaman")

@section("content")

<header class="page-header page-header-dark pb-10">
    <div class="container"><br>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-n10">
    @include('partial.alert')
    <div class="card mb-4">
        <div class="card-header">
        Data Pengambilan Barang
            <!-- <div class="btn-group dropdown float-right">
                <button type="button" class="btn btn-success dropdown-toggle btn-sm float-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tambah Peminjaman
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                    <form action="{{ route('peminjaman.memo.create') }}" method="post" enctype="multipart/form-data">
                        <a style="margin-left:10px;" class="btn btn-sm"- href="{{route('peminjaman.memo.create')}}"> 
                            Dengan Memo
                        </a>
                    </form>
                    <form  method="post" enctype="multipart/form-data">
                        <a style="margin-left:10px;" class="btn btn-sm" href=""> 
                            Tanpa Memo
                        </a>
                    </form>
                </div>
            </div> -->
        </div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Peminjam</th>                  
                            <th>NIP</th>
                            <th>No Handphone</th>
                            <th>Email</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Kegiatan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($peminjaman as $row)
                            <tr >
                                <td>{{$row->kode_transaksi}}</td>
                                <td>{{$row->peminjam}}</td>
                                <td>{{$row->nip}}</td>
                                <td>{{$row->no_hp}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->tgl_pinjam}}</td>
                                <td>{{$row->tgl_kembali}}</td>
                                <td>{{$row->keterangan}}</td>
                                <td>{{$row->status->name}}</td>

                                <td class="text-center">
                                    <a href="{{route('pengambilan.detail', $row->id)}}" class="btn btn-light btn-sm"><small>Detail</small></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7"><center><i>Tidak ada data.</i></center></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        $('#dataTable').DataTable( {
            "ordering": false
        } );
    } );

    $(function(){
      // bind change event to select
      $('#sortby').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });

</script>

@endsection