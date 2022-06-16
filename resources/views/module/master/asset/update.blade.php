@extends("master.main")

@section("title","Ubah Data Asset")

@section("content")

<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
    <div class="container-fluid">
        <div class="page-header-content">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="book-open"></i></div>
                        <a href="{{route('master.asset.index')}}"> Daftar Asset </a>  &nbsp;> Ubah
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-4">
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{route('master.asset.update', [$asset])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <label class="small mb-1">Nama Asset </label><label class="small mb-1" style="color:red">*</label>
                                    <input name="nama_asset" required="true" value="{{$asset->nama_asset}}" class="form-control{{ $errors->has('nama_asset') ? ' is-invalid' : '' }}" type="text"/>
                                    @if ($errors->has('nama_asset'))
                                        <span class="small" style="color:red" role="alert">
                                            <strong>{{ $errors->first('nama_asset') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-xl-12">
                                <div class="form-group">
                                    <label class="small mb-1">Jumlah Asset </label><label class="small mb-1" style="color:red">*</label>
                                    <input name="jumlah_asset" required="true" value="{{$asset->jumlah_asset}}" class="form-control{{ $errors->has('jumlah_asset') ? ' is-invalid' : '' }}" type="text"/>
                                    @if ($errors->has('jumlah_asset'))
                                        <span class="small" style="color:red" role="alert">
                                            <strong>{{ $errors->first('jumlah_asset') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                            </div>
                                
                            </div>
                            
                        </div>
                        <button class="btn btn-primary float-right" type="submit">Simpan</button>
                        <a href="{{ url()->previous() }}" class="btn btn-light float-right" style="margin-right:10px">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
    $('select[name=role_id]').on('change', function () {

        if (this.value == 4) {
            $('input[id=pdn]').prop('value', 0);
        }

        else {
            $('input[id=pdn]').prop('value', 1);
        }

    });


</script>

@endsection
