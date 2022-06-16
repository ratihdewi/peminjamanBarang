@extends("master.main")

@section("title","Asset")

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
            Daftar Asset
            <a class="btn btn-primary btn-sm float-right" href="{{route('master.asset.create')}}">
                <i class="mr-1" data-feather="plus-square"></i>
                Tambah Daftar Asset
            </a>
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
                                        <a href="{{route('master.asset.edit', [$row])}}" class="dropdown-item" id="edit-item" data-item-id="{{$row->id}}"> Edit </a>
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


@endsection