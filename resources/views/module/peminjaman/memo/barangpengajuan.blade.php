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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($peminjaman->items as $row)
                                <tr>
                                    <td>{{$row->asset->nama_asset}}</td>
                                    <td>{{$row->jumlah}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-hapus-item btn-sm btn-danger" href="javascript:ajaxItemDelete('{{route('peminjaman.item.delete', [$row])}}')"><small>Hapus</small></a>
                                    </td>
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
                <form action="{{route('pengajuan.reject', $peminjaman)}}" class="pull-left"  method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <button class="btn btn-danger float-left ml-2" id="btn-batal-procurement">Tolak Peminjaman</button>
                </form> 
                <form action="{{route('pengajuan.approve', $peminjaman)}}" class="pull-left"  method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <button class="btn btn-primary float-left" style="margin-left:10px">Terima Peminjaman</i>
                    </button>
                </form> 
                <a href="{{route('pengajuan.index')}}" class="btn btn-light float-right" style="margin-left:10px">Kembali</a>
            </div>
        </div>
    </div>
</div>
