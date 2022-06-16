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
                                    <a href="{{route('pengembalian.detail', $row->id)}}" class="btn btn-light btn-sm"><small>Detail</small></a>
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