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
        @forelse($items as $row)
        <tr>
            <td>{{$row->asset->nama_asset}}</td>
            <td>{{$row->jumlah}}</td>
            <td class="text-center">
                <a class="btn btn-hapus-item btn-sm btn-danger" href="javascript:ajaxItemDelete('{{route('peminjaman.item.delete', [$row])}}')"><small>Hapus</small></a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="10"><center><i>Tidak ada data.</i></center></td>
        </tr>
        @endforelse
    </tbody>
    
</table>

<style>
    .dataTables_filter {
        display: none;
    }
</style>

<script type="text/javascript">
    $(document).ready( function () {
        $('#item_table').DataTable();
    } );
</script>