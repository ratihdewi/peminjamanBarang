@extends("master.main")

@section("title","Kategori Barang")

@section("content")

<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container"><br>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-n10">
    @include('partial.alert')
    <div class="card mb-4">
        <div class="card-header">
            Daftar Asset
            @if(Auth::user()->role_id==1)
            <button class="btn btn-primary btn-sm float-right" type="button" data-toggle="modal" data-target="#addModal"><i class="mr-1" data-feather="plus-square"></i>
                Tambah Asset
            </button>
            @endif
        </div>
        <div class="card-body">
            <div class="datatable">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Asset</th>
                            <th>Jumlah Tersedia</th>
                            @if(Auth::user()->role_id==1)<th class="text-center">Aksi</th>@endif
                        </tr>
                    </thead>
                    <tfoot>
                        
                    </tfoot>
                    <tbody>
                       @forelse($assets as $row)
                            <tr class="data-row">
                                <td class="name">{{$row->nama_asset}}</td>
                                <td class="code">{{$row->jumlah_asset}}</td>
                                @if(Auth::user()->role_id==1)
                                <td><div class="btn-group dropdown">
                                    <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                                        <a class="dropdown-item" id="edit-item" data-item-id="{{$row->id}}"> Edit </a>
                                        <form action="{{ route('master.asset.delete', $row->id) }}" class="pull-left"  method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="dropdown-item" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                                        </button>
                                        </form>                  
                                    </div>
                                </div></td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2"><center><i>Tidak ada data.</i></center></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('module.master.asset.create')
@include('module.master.asset.update')
@include('module.master.asset.js')
@endsection