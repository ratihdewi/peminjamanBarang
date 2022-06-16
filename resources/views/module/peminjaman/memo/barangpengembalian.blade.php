<div class="row">
    <div class="col">
        <div class="card mb-4">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($peminjaman->items as $row)
                                <tr>
                                    <td>{{$row->asset->nama_asset}}</td>
                                    <td>{{$row->jumlah}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8"><center><i>Tidak ada data.</i></center></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">                
                <form action="{{route('kembali.proses', $peminjaman)}}" class="pull-left"  method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <button class="btn btn-primary float-left" style="margin-left:10px">Kembalikan Barang</i>
                    </button>
                </form>
                <form action="{{route('pengembalian.perpanjang', $peminjaman)}}" class="pull-left"  method="get">
                    <button class="btn btn-warning float-left" style="margin-left:10px">Perpanjang Peminjaman</i>
                    </button>
                </form> 
                <a href="{{route('pengembalian.index')}}" class="btn btn-light float-right" style="margin-left:10px">Kembali</a>
            </div>
        </div>
    </div>
</div>
