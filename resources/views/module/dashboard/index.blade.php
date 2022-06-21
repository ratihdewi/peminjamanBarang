@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends("master.main")

@section("title","Dashboard")

@section("content")
<header class="page-header page-header-dark  pb-10">
    <div class="container"><br>
    
    </div>
</header>
<!-- Main page content-->
<div class="container mt-n10">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Transaksi</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$transaksi->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total seluruh transaksi
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Sedang Pinjam</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$peminjaman->where('status_id', 1)->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> sedang dipinjam
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-book text-success icon-lg" style="width: 40px;height: 40px;"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Asset</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$asset->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-book mr-1" aria-hidden="true"></i> Total Asset
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">User</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$user->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-account mr-1" aria-hidden="true"></i> Total seluruh user
                  </p>
                </div>
              </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                  <h4 class="card-title">Data Transaksi Terbaru</h4>
                  
                    <div class="table-responsive">
                        <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                              <th>Kode</th>
                              <th>Nama Peminjam</th>
                              <th>No Handphone</th>
                              <th>Email</th>
                              <th>Tgl Pinjam</th>
                              <th>Tgl Kembali</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                          @forelse($peminjaman as $row)
                            <tr >
                              <td>{{$row->kode_transaksi}}</td>
                              <td>{{$row->peminjam}}</td>
                              <td>{{$row->no_hp}}</td>
                              <td>{{$row->email}}</td>
                              <td>{{$row->tgl_pinjam}}</td>
                              <td>{{$row->tgl_kembali}}</td>
                              <td>{{$row->status->name}}</td>

                              <td class="text-center">
                                  <a href="{{route('peminjaman.detail', $row->id)}}" class="btn btn-light btn-sm"><small>Detail</small></a>
                              </td>
                            </tr>
                          @empty
                            <tr>
                                <td colspan="7"><center><i>Tidak ada data.</i></center></td>
                            </tr>
                          @endforelse
                            <!-- <tr>
                                <td>MEMO-2021</td>
                                <td>Laptop</td>
                                <td>Ratih</td>
                                <td>21/03/2022</td>
                                <td>25/03/2022</td>
                                <td>Pinjam</td>
                                <td><button>Kembali</button></td>
                            </tr>
                            <tr>
                                <td>MEMO-2021</td>
                                <td>Laptop</td>
                                <td>Ratih</td>
                                <td>21/03/2022</td>
                                <td>25/03/2022</td>
                                <td>Pinjam</td>
                                <td><button>Kembali</button></td>
                            </tr>
                            <tr>
                                <td>MEMO-2021</td>
                                <td>Laptop</td>
                                <td>Ratih</td>
                                <td>21/03/2022</td>
                                <td>25/03/2022</td>
                                <td>Pinjam</td>
                                <td><button>Kembali</button></td>
                            </tr>
                            <tr>
                                <td>MEMO-2021</td>
                                <td>Laptop</td>
                                <td>Ratih</td>
                                <td>21/03/2022</td>
                                <td>25/03/2022</td>
                                <td>Pinjam</td>
                                <td><button>Kembali</button></td>
                            </tr>
                            <tr>
                                <td>MEMO-2021</td>
                                <td>Laptop</td>
                                <td>Ratih</td>
                                <td>21/03/2022</td>
                                <td>25/03/2022</td>
                                <td>Pinjam</td>
                                <td><button>Kembali</button></td>
                            </tr> -->

                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
          
</div>
@endsection
